<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusBolsao;

class StatusBolsaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusBolsao::create([
            "descricao" => "Inscrições Abertas"
        ]);

        StatusBolsao::create([
            "descricao" => "Finalizado"
        ]);

        StatusBolsao::create([
            "descricao" => "Cancelado"
        ]);

        StatusBolsao::create([
            "descricao" => "Aguardando Resultado"
        ]);
    }
}
