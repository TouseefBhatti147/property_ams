<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class CountryController extends Controller
{
    public function countries()
    {
        return $this->hasMany(Country::class);
    }
public function country_list()
    {
        
        if(auth()->check()) {
          
            $countries = Country::all();
            return view('general.country.country-list', compact('countries'));
        } else {
          
            return redirect()->route('login');
        }
    }
    public function create_country()
{
  
    return view('general.country.create-country');
}

public function store_country(CountryRequest $request): RedirectResponse
{  
    try {
        Country::create($request->validated());
        return redirect()->route('general.country.country-list')->with('success', 'Country created successfully.');
    } catch (\Exception $e) {
        \Log::error('Failed to create country: ' . $e->getMessage());
        return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create country.']);
    } 
      
}

private function handleErrorRedirect(string $errorMessage): RedirectResponse
{
    return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
}
    public function edit_country($id)
{
    $country = Country::findOrFail($id); // Assuming you want to edit an existing country
    return view('general.country.edit-country', compact('country'));
}

    public function edit(Country $country)
    {
        return view('countries.country.edit', compact('country'));
    }

    public function update_country(Request $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->update($request->all());
        return redirect()->route('general.country.country-list')->with('success', 'Country updated successfully.');
    }

    public function destroy_country(Country $country)
    {
        $country->delete();
        return redirect()->route('general.country.country-list')->with('success', 'Country deleted successfully.');
    }
}
