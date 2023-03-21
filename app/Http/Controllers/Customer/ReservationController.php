<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Locker;
use App\Models\Reservation;
use App\Notifications\CompanyNotify;
use App\Notifications\UserNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;


class ReservationController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $companies = Company::all();

        return view('customer.reservation.index', compact('companies'));
    } //-- end of index


    public function store(Request $request)
    {

        Reservation::create([
            'user_id' => Auth::user()->id,
            'company_id' => $request->company_id,
            'locker_id' => $request->locker_number
        ]);

        // change the status for this locker
        Locker::where('id', $request->locker_number)->update(['available' => 0]);

        // send notify for the company
        $company = Company::where('id', $request->company_id)->first();

        $company->notify(new CompanyNotify('Hi, there is a new reservation for locker id is ' . $request->locker_number));

        // send notification for user
        Notification::send(Auth::user(), new UserNotify('Hi, there is a new reservation for locker id '  . $request->locker_number . ' is available to you end at ' . Carbon::now()->addMonth()));

        return redirect()->back()->with('successfully', 'Send Reservation Successfully');
    } //-- end of store
}//-- end of class ReservationController
