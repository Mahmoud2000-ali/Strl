<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable  
{
    use  Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'phone_number',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * appends
     *
     * @var array
     */
    protected $appends = [
        'full_name'
    ];

    //-------------------------------------- Attributes

    public function getFullNameAttribute()
    {
        return  $this->first_name . " " . $this->last_name;;
    }

    //------------------------------------ relationships
    public function image()
    {
        return $this->hasOne(Image::class, 'parent_id')->where('model', get_class(new User()));
    } //-- end attributes

    public function getImageUrl()
    {
        $path = $this->image?->path;

        return $path  ? asset('storage/' . $path) : asset('storage/images/users/default.png');
    } //-- end attributes

    /**
     * reservations
     *
     * @return void
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    } //-- end attributes
}
