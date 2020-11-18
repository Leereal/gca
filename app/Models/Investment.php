<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investment extends Model
{
    use HasFactory, SoftDeletes;

    //Plan Relationship
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    //Bank Relationship
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }

    // Bonus Relationship
    public function bonus()
    {
        return $this->hasOne('App\Models\Bonus');
    }

    //User Relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Auction Relationship
    public function auctions()
    {
        return $this->hasMany('App\Models\Auction');
    }   
}
