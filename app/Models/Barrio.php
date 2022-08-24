<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    public $timestamps = false;

    protected $table = 'barrios';

    protected $fillable = [
        'id',
        'barrio',
    ];
}
