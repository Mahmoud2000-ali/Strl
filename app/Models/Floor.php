<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = ['building_id', 'number'];

    //---------------------------------------------------------------- relationships
    public function lockers()
    {
        return $this->hasMany(Locker::class);
    } //-- end lockers

    public  function building()
    {
        return $this->belongsTo(Building::class);
    } //-- end building
}//-- end class Floor
