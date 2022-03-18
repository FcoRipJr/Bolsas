<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBolsao extends Model
{
    use HasFactory;

    protected $table = 'status_bolsao';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
}
