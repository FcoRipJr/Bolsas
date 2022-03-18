<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserRoles;
use App\Models\Nacionalidade;
use App\Models\Parentesco;
use App\Models\Inscricao;
use App\Models\Bolsao;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nome_completo',
        'telefone',
        'data_nascimento',
        'cpf',
        'foto',
        'maior_idade',
        'nacionalidade_id',
        'parentesco_id',
    ];

    protected $dates = ['created_at', 'updated_at','data_nascimento'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function users_roles()
    {
        return $this->hasMany(UserRoles::class);
    }

    public function nacionalidade() 
    {
        return $this->belongsTo(Nacionalidade::class);
    }

    public function parentesco() 
    {
        return $this->belongsTo(Parentesco::class);
    }

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }

    public function bolsoes()
    {
        return $this->hasMany(Bolsao::class);
    }

}
