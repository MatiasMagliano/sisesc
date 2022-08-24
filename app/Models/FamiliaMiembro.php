<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaMiembro extends Model
{
    public $timestamps = false;
    protected $table = 'familia_miembro';
    protected $fillable = [
        'padre_id',
        'familia_id',
        'estudiante_id'
    ];
}
