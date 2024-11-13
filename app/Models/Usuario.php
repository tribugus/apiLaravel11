<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'tw_usuario';

    public $timestamps = true;

    protected $fillable = ['nombre'];

    protected $hidden = [
        'created_at',
    ];
}
