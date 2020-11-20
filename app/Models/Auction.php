<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auction extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * Get the user for this auction.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the investment for this auction.
     */
    public function investment()
    {
        return $this->belongsTo('App\Models\Investment');
    }

    /**
     * Get the bids for this auction.
     */
    public function bids()
    {
        return $this->hasMany('App\Models\Bids');
    }

    /**
     * Get the bank for this auction.
     */
    public function bank_detail()
    {
        return $this->belongsTo('App\Models\BankDetail');
    }
}
