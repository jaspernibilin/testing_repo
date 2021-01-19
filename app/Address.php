<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'country'];

    public function users() {
        return $this->belongsTo(User::class);
    }
}

