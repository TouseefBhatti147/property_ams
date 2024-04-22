<?php

namespace App\Http\Controllers;
use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function countries()
    {
        return $this->hasMany(city::class);
    }
public function city_list()
    {
        
        if(auth()->check()) {
            $cities = City::with('country')->get();

            return view('general.city.city-list', compact('cities'));
        } else {
          
            return redirect()->route('login');
        }
    }
    public function create_city()
{
  
    return view('general.city.create-city');
}

public function store_city(CityRequest $request)
{   
    try {
        City::create($request->validated());
        return redirect()->route('general.city.city-list')->with('success', 'city created successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create city.']);
    }
}
    public function edit_city($id)
{
    $city = city::findOrFail($id); // Assuming you want to edit an existing city
    return view('general.city.edit-city', compact('city'));
}

    public function edit(city $city)
    {
        return view('countries.city.edit', compact('city'));
    }

    public function update_city(Request $request, $id)
    {
        $city = city::findOrFail($id);
        $city->update($request->all());
        return redirect()->route('general.city.city-list')->with('success', 'city updated successfully.');
    }
    public function destroy_city(city $city)
    {
        $city->delete();
        return redirect()->route('general.city.city-list')->with('success', 'city deleted successfully.');
    }
}
