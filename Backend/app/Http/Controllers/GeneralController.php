<?php

namespace App\Http\Controllers;
use App\Models\General;
use App\Models\Country;
use App\Http\Requests\CountryRequest;

use Validator;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    ///////////Start:Country Module////////

    public function index()
    {
        
        if(auth()->check()) {
            return view('general.index');
        } else {
           
            return redirect()->route('login');
        }
    }
public function countries()
    {
        return $this->hasMany(Country::class);
    }
public function country_list()
    {
        
        if(auth()->check()) {
          
            $countries = Country::all();
            return view('general.country-list', compact('countries'));
        } else {
          
            return redirect()->route('login');
        }
    }
    public function create_country()
{
    //$country = Country::findOrFail(); // Assuming you want to edit an existing country
    return view('general.create-country');
}

public function store(CountryRequest $request)
{   
    try {
        Country::create($request->validated());
        return redirect()->route('general.country-list')->with('success', 'Country created successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create country.']);
    }
}
    public function edit_country($id)
{
    $country = Country::findOrFail($id); // Assuming you want to edit an existing country
    return view('general.edit-country', compact('country'));
}
public function update_country(Request $request, $id)
{
    $country = Country::findOrFail($id);
    $country->update($request->all());
    return redirect()->route('general.country-list')->with('success', 'Country updated successfully!');
}
///////////End:Country Module/////////
    

    public function show(Country $country)
    {
       // return view('countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $country->update($request->all());
        return redirect()->route('general.country-list')->with('success', 'Country updated successfully.');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('general.country-list')->with('success', 'Country deleted successfully.');
    }
    
}