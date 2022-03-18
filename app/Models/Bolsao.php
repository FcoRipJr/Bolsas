<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatusBolsao;
use App\Models\User;
use App\Models\Inscricao;

class Bolsao extends Model
{
    use HasFactory;

    protected $table = 'bolsoes';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at','data_fim'];

    public function created_by() 
    {
        return $this->belongsTo(User::class);
    }

    public function status_bolsao() 
    {
        return $this->belongsTo(StatusBolsao::class);
    }

    public function incricoes() 
    {
        return $this->hasMany(Inscricao::class);
    }
}
