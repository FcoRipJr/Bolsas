<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parentesco;

class ParentescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parentesco::create([
            "descricao" => "Mãe"
        ]);

        Parentesco::create([
            "descricao" => "Pai"
        ]);

        Parentesco::create([
            "descricao" => "Outros"
        ]);
    }
}
