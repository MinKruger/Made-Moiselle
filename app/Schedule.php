<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'id',
        'client_id',
        'procedure_id',
        'status',
        'date',
    ];

    protected $dates = [
        'date',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }
}
