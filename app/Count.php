<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $fillable = [
        'proyects',
        'clients',
        'coofe',
        'building',
    ];
}