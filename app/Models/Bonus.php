<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bonus extends Model
{
    use HasFactory, SoftDeletes;

     /**
     * Get the investment for this bonus.
     */
    public function investment()
    {
        return $this->belongsTo('App\Models\Investment');
    }

    /**
     * Get the user who for this bonus.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
