<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the users for this Plan.
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
