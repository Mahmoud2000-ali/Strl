<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\services\ImageService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('company.profile.create');
    } //-- end of index


    public function update(UpdateCompanyRequest $request, Company $company, ImageService $image)
    {
        $validated = $request->validated();

        // update the company
        $company->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'price' => $validated['price'],
        ]);

        // check if update the image
        if ($request->hasFile('image'))
            $image->updateImage($request, $company->id, $company, get_class(new Company()));

        return redirect()->back()->with('successfully', 'Update Company Successfully');
    } //-- end of update

}//-- end of class
