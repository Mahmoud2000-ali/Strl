<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(){

        $available_lockers = Reservation::where('company_id', Auth::user()->id)->get();

        return view('company.reservation.index', compact('available_lockers'));
    }//-- end index()
}//-- end of class ReservationController
