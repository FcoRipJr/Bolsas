<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidade::create([
            "descricao" => "Brasileiro(a)"
        ]);

        Nacionalidade::create([
            "descricao" => "Estrangeiro(a)"
        ]);
    }
}
