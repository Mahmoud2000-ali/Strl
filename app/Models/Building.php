<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['company_id', 'number'];

    //---------------------------------------------------------------- relationships
    /**
     * floors
     *
     * @return void
     */
    public function floors(){
        return $this->hasMany(Floor::class);
    }//-- end floors

    /**
     * company
     *
     * @return void
     */
    public function company(){
        return $this->belongsTo(Company::class);
    }//-- end company
}//-- end of class Building
