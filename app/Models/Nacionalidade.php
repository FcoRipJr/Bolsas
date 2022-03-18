<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Nacionalidade extends Model
{
    use HasFactory;

    protected $table = 'nacionalidades';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public function user() 
    {
        return $this->hasMany(User::class);
    }
}
