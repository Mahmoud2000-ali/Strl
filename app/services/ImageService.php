<?php

namespace App\services;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageService
{

    /**
     * UploadImage
     *
     * @param  mixed $request
     * @param  mixed $user_id
     * @param  mixed $model
     * @return void
     */
    public function uploadImage(Request $request, int $object_id, $model)
    {
        // store in local and return the path
        $path = $request->file('image')->store('images/users');

        // store path in database
        Image::create([
            'path' => $path,
            'parent_id' => $object_id,
            'model' => $model
        ]);

        return $path;
    } //-- end of uploadImage


    public function updateImage(Request $request, $object_id, $object, $model)
    {
        // delete the image
        $this->deleteImage($object);

        return $this->uploadImage($request, $object_id, $model);
    } //-- end of updateImage


    /**
     * checkBefore
     *
     * @param  mixed $object
     * @return void
     */
    public function pathImage($object)
    {
        // return the path
        return $object->image?->path;
    } //-- end of checkBefore


    /**
     * deleteImage
     *
     * @param  mixed $path
     * @return void
     */
    public function deleteImage($object)
    {
        // get image path
        $path = $this->pathImage($object);

        // check before delete
        if ($path != null) {
            Storage::delete($path);
            return $object->image()->delete();
        }

        return;
    } //-- end of deleteImage
}//-- end of class ImageService
