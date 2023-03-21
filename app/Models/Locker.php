<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    protected $fillable = ['floor_id', 'available', 'number'];

    //---------------------------------------------------------------- relationships
    public function floor()
    {
        return $this->belongsTo(Floor::class);
    } //-- end floor
}//-- end class Locker
