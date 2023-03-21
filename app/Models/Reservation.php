<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'company_id', 'locker_id', 'experian_date'];


    // ---------------------------------------------------------------- relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    } //-- end of relationships

    public function company()
    {
        return $this->belongsTo(Company::class);
    } //-- end of relationships

    public function locker()
    {
        return $this->belongsTo(Locker::class);
    } //-- end of relationships
}//-- end class Reservation
