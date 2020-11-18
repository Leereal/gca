<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * Get the users for this Bank.
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    /**
     * Get the bids for this Bank.
     */
    public function bids()
    {
        return $this->hasMany('App\Models\Bids');
    }

    /**
     * Get the investments for this Bank.
     */
    public function investments()
    {
        return $this->hasMany('App\Models\Investment');
    }

    /**
     * Get the bank details for this Bank.
     */
    public function bank_details()
    {
        return $this->hasMany('App\Models\BankDetail');
    }

}
