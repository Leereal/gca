<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankDetail extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the bank for this bank detail.
     */
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }

    /**
     * Get the auction for this bank detail.
     */
    public function auction()
    {
        return $this->hasOne('App\Models\Auction');
    }

    /**
     * Get the user for this bank detail.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
