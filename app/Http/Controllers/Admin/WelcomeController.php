<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Locker;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $clients_number = User::count();
        $lockers_number = Locker::count();
        $companies = Company::get();
        return view('admin.welcome', compact('clients_number', 'lockers_number', 'companies'));
    }//-- end of function index
}//-- end of class
