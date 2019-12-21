<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable = [
        'id',
        'name',
        'amount',
        'base_amount',
        'session',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
