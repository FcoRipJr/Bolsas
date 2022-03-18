<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    use HasFactory;

    protected $table = 'nacionalidades';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
}
