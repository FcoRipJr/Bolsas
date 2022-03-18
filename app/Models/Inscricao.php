<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Bolsao;

class Inscricao extends Model
{
    use HasFactory;

    protected $table = 'inscricoes';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function bolsoes() 
    {
        return $this->hasMany(Bolsao::class);
    }
}
