<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\services\ImageService;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::latest()->get();
        return view('admin.clients.index', compact('clients'));
    } //-- end of index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    } //-- end of create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request, ImageService $image)
    {
        // get validated data
        $validated = $request->validated();

        // create clients
        $user_id = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'username' => $validated['username'],
            'phone_number' => $validated['phone_number'],
            'password' => Hash::make($validated['password']),
            'email' => $validated['email']
        ])->id;

        // check if there is image
        if ($request->hasFile('image'))
            $image->uploadImage($request, $user_id, get_class(new User()));

        // redirect
        return redirect()->back()->with('successfully', 'Create Client Successfully');
    } //-- end of store

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $client)
    {
        return view('admin.clients.edit', compact('client'));
    } //-- end edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, User $client, ImageService $image)
    {
        // validated the data
        $validated = $request->validated();

        // update data
        $client->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'username' => $validated['username'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email']
        ]);

        // check if update the image
        if ($request->hasFile('image'))
            $image->updateImage($request, $client->id, $client, get_class(new User()));


        return redirect()->back()->with('successfully', 'Update Client Successfully');
    } //-- end update

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $client, ImageService $image)
    {
        // delete image from local and database
        $image->deleteImage($client);

        // delete the client
        $client->delete();

        // return json response
        return response()->json(['status' => true, 'msg' => 'Delete Client Successfully'], 200);
    }//-- end of destroy
}//-- end client controller
