<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Company extends Authenticatable implements MustVerifyEmail
{
    use  Notifiable;

    protected $guard = 'company';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'building_number',
        'floor_number',
        'price',
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
     * lockers
     *
     * @return void
     */
    public function lockers()
    {
        $buildings =  $this->buildings;

        $floors = Floor::whereIn('building_id', $buildings->pluck('id'))->get();

        return Locker::whereIn('floor_id', $floors->pluck('id'))->get();
    } //-- end lockersCount()


    /**
     * AvailableLocker
     *
     * @return void
     */
    public function availableLocker()
    {
        $buildings =  $this->buildings;

        $floors = Floor::whereIn('building_id', $buildings->pluck('id'))->get();

        return Locker::whereIn('floor_id', $floors->pluck('id'))
            ->where('available', true)
            ->get();
    } //-- end AvailableLocker()


    public function notAvailableLocker()
    {
        $buildings =  $this->buildings;

        $floors = Floor::whereIn('building_id', $buildings->pluck('id'))->get();

        return Locker::whereIn('floor_id', $floors->pluck('id'))
            ->where('available', false)
            ->get();
    } //-- end AvailableLocker()

    //------------------------------------ relationships
    public function image()
    {
        return $this->hasOne(Image::class, 'parent_id')->where('model', get_class(new Company()));
    } //-- end attributes

    public function getImageUrl()
    {
        $path = $this->image?->path;

        return $path  ? asset('storage/' . $path) : asset('storage/images/users/default.png');
    } //-- end attributes

    /**
     * buildings
     *
     * @return void
     */
    public function buildings()
    {
        return $this->hasMany(Building::class);
    } //-- end building

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    } //-- end reservation
}
