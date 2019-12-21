<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'name',
        'cpf',
        'birthdate',
        'sex',
        'email',
        'address',
        'number',
        'complement',
        'city',
        'state',
        'cep',
    ];

    public function procedures()
    {
        return $this->belongsToMany(Procedure::class);
    }
}
