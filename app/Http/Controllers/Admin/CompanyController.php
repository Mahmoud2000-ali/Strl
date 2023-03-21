<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Notifications\CompanyNotify;
use App\services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->get();
        //dd($companies->first()->lockers());
        return view('admin.companies.index', compact('companies'));
    } //-- end index()

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    } //-- end create()

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request, ImageService $image)
    {
        $validated = $request->validated();

        $company = Company::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone_number' => $validated['phone_number'],
            'building_number' => $validated['building_number'],
            'floor_number' => $validated['floor_number'],
            'price' => $validated['price']
        ]);

        $number_b = 1;
        $number_l = 1;

        // create building for this company
        for ($i = 0; $i < $validated['building_number']; $i++) {

            $building = $company->buildings()->create([
                'number' => $i + 1
            ]);

            for ($j = 0; $j < $validated['floor_number']; $j++) {
                $floor = $building->floors()->create([
                    'number' => $number_b++
                ]);

                for ($h = 0; $h < $validated['locker_number']; $h++) {
                    $floor->lockers()->create([
                        'number' => $number_l++
                    ]);
                }
            }
        }

        // check if there is image
        if ($request->hasFile('image'))
            $image->uploadImage($request, $company->id, get_class(new Company()));

        // redirect
        return redirect()->back()->with('successfully', 'Create Company Successfully');
    } //-- end store()

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, ImageService $image)
    {
        // delete image from local and database
        $image->deleteImage($company);

        // delete the client
        $company->delete();

        // return json response
        return response()->json(['status' => true, 'msg' => 'Delete Company Successfully'], 200);
    } //-- end of delete


    /**
     * createNotify
     *
     * @param  mixed $company
     * @return void
     */
    public function createNotify(Company $company)
    {
        return view('admin.companies.notify', compact('company'));
    } //-- end of createNotify



    /**
     * storeNotify
     *
     * @param  mixed $company
     * @param  mixed $request
     * @return void
     */
    public function storeNotify(Company $company, Request $request)
    {

        // validated
        $validated = $request->validate([
            'notify' => 'required|max:70',
        ]);

        // send notify
        $company->notify(new CompanyNotify($validated['notify']));

        // redirect
        return redirect()->back()->with('successfully', 'Send Notify To Company Successfully');
    } //-- end of storeNotify
}//-- end of controller
