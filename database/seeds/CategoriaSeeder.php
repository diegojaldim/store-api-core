<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = [
            ['nome' => 'Cama, mesa e banho'],
            ['nome' => 'Decoração'],
            ['nome' => 'Eletro'],
            ['nome' => 'Infantil'],
            ['nome' => 'Iluminação'],
            ['nome' => 'Jardim e Lazer'],
            ['nome' => 'Móveis'],
            ['nome' => 'Reforma e Garagem'],
            ['nome' => 'Utilidades Domésticas'],
        ];
        
        DB::table('categorias')->insert($insert);
    }
}
