<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Parentesco extends Model
{
    use HasFactory;

    protected $table = 'parentescos';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public function user() 
    {
        return $this->hasMany(User::class);
    }
}
