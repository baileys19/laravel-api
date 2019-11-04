<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CountryModel;

class CountryController extends Controller
{
    public function country(){
        return response()->json(CountryModel::get(), 200);
    }
    
    public function countryByID($id){
        return response()->json(CountryModel::find($id), 200);
    }
    
    public function countrySave(Request $request){
        $country = CountryModel::create($request->all());
        return response()->json($country, 201);
    }
<<<<<<< HEAD
    
    public function countryUpdate(Request $request, CountryModel $country){
        $country->update($request->all());
        return response()->json($country, 200);
    }
    
    public function countryDelete(Request $request, CountryModel $country){
        $country->delete();
        return response()->json(null, 200);
    }
=======
>>>>>>> 253a71a7aab663ab658b26af3f5ed8fd5563d282
}
