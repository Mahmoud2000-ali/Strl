<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Reservation;
use App\Models\User;
use App\services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $reservations = Reservation::with('company')->where('user_id', Auth::user()->id)->get();

        return view('customer.profile.index', compact('reservations'));
    } //--end index

    public function update(UpdateClientRequest $request, User $client, ImageService $image)
    {

        // validated the data
        $validated = $request->validated();



        // update data
        $client->update([
            'first_name' => $validated['first_name'],
            'last_name' =>  $validated['last_name'],
            'username' => $validated['username'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email']
        ]);

        // check if update the image
        if ($request->hasFile('image'))
            $image->updateImage($request, $client->id, $client, get_class(new User()));

        return redirect()->back()->with('successfully', 'Update Client Successfully');
    } //-- end update
}//-- end of class ProfileController
