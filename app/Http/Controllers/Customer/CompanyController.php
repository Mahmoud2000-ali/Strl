<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Company;
use App\Models\Floor;
use App\Models\Locker;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Company $company)
    {
        $buildings =  $company->buildings;

        $price = $company->price;
        return view('customer.reservation._buildings', compact('buildings', 'price'));
    }//-- end show


    public function availableLocker(Building $building){

        $floors_id =  Floor::where('building_id', $building->id)->get('id');

        $lockers = Locker::whereIn('floor_id', $floors_id)
        ->where('available', 1)
        ->get();

        return view('customer.reservation._lockers', compact('lockers'));
    }
}//-- end of class CompanyController
