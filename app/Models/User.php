<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'email',
        'password',
        'username',
        'cellphone',
        'ipaddress',
        'referrer_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Investment Relationship
    public function investments()
    {
        return $this->hasMany('App\Models\Investment');
    }

    //Bonus Relationship
    public function bonuses()
    {
        return $this->hasMany('App\Models\Bonus');
    }

    //Auction Relationship
    public function auctions()
    {
        return $this->hasMany('App\Models\Auction');
    }

 
     //A user has a referrer.
  
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }


     // A user has many referrals.
    
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }
    
    //Pending Bids Relationship
    public function pending_payments()
    {
        return $this->hasManyThrough('App\Models\Bids', 'App\Models\Auction');
    }

    //Bids Relationship
    public function bids()
    {
        return $this->hasMany('App\Models\Bids');
    }

    //Bank Detail Relationship
    public function bank_details()
    {
        return $this->hasMany('App\Models\BankDetail');
    }


}
