<?php
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
      
       
    }
   ///start:NEW Code
   public function create(): View
   {
       $roles = Role::pluck('firstname','firstname')->all();
       return view('users.create',compact('roles'));
   }
   public function store(Request $request): RedirectResponse
   {
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email|unique:users,email',
           'password' => 'required|same:confirm-password',
           'roles' => 'required'
       ]);
   
       $input = $request->all();
       $input['password'] = Hash::make($input['password']);
   
       $user = User::create($input);
       $user->assignRole($request->input('roles'));
   
       return redirect()->route('users.index')
                       ->with('success','User created successfully');
   }
   public function show($id): View
   {
       $user = User::find($id);
       return view('users.show',compact('user'));
   }
   
   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id): View
   {
       $user = User::find($id);
       $roles = Role::pluck('name','name')->all();
       $userRole = $user->roles->pluck('name','name')->all();
   
       return view('users.edit',compact('user','roles','userRole'));
   }
   
   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id): RedirectResponse
   {
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email|unique:users,email,'.$id,
           'password' => 'same:confirm-password',
           'roles' => 'required'
       ]);
   
       $input = $request->all();
       if(!empty($input['password'])){ 
           $input['password'] = Hash::make($input['password']);
       }else{
           $input = Arr::except($input,array('password'));    
       }
   
       $user = User::find($id);
       $user->update($input);
       DB::table('model_has_roles')->where('model_id',$id)->delete();
   
       $user->assignRole($request->input('roles'));
   
       return redirect()->route('users.index')
                       ->with('success','User updated successfully');
   }
   
   ////////////////////

    public function signup(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|min:2|max:20',
            'lastname' => 'required|min:2|max:20',
            'telephone' => 'required|min:10|max:30',
            'email' => 'required|email|unique:users'
        ]);
        if ($validated) {
            DB::table('users')->insert([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'telephone' => $request->input('telephone'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
        }
    }

    public function login(Request $request)
    {

        $email = $request->input('email');
        $user = User::where('email', $email)->get();
        $password = $user->value('password');

        if (!$user)
            return response()->json(['success' => false, 'message' => 'Login Fail, no matches in our database']);

        if (Auth::check()) {
            $user = Auth::user();

            session(['id' => $user->id, 'firstname' => $user->firstname, 'lastname' => $user->lastname, 'telephone' => $user->telephone, 'email' => $user->email]);
        } else {
            //return response()->json(['error' => 'Authentication failed'], 401);
        }

        return response()->json(['success' => true, 'message' => 'We\'ve found a match', 'data' => $user[0], 'pass' => $password], 200);
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return response()->json(['message' => 'Logout successful']);
    }

    public function updateProfile(Request $request, $user_id)
    {
        $user = User::find($user_id);
        
        $validated = $request->validate([
            'firstname' => 'required|min:2|max:20',
            'lastname' => 'required|min:2|max:20',
            'telephone' => 'required|min:10|max:30',
        ]);
        DB::table('users')->where('id', $user_id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'telephone' => $request->telephone,
        ]);
        $user = User::find($user_id);
        return response()->json(['success' => true, 'message' => 'Profile updated successfully', 'data' => $user]);
        
    }

   

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['success' => true, 'message' => 'User deleted successfully']);
    }

}