<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bids extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded =[];

    /**
     * Get the auction for this bid.
     */
    public function auction()
    {
        return $this->belongsTo('App\Models\Auction');
    }

    /**
     * Get the user who placed the bid.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the plan for  the bid.
     */
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    /**
     * Get the bank for  the bid.
     */
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }
}
