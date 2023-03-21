<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(Request $request){

        $notifications = Auth::user()->notifications;

        if($request->search){
            $notifications = Auth::user()->notifications->where('data.notify', '=', $request->search);
        }



        return view('customer.welcome', compact('notifications'));
    }
}//-- end of classWelcomeController
