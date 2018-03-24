<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = [
            ['nome' => 'Aguardando pagamento', 'tipo' => 'pedido'],
            ['nome' => 'Pagamento efetuado com sucesso', 'tipo' => 'pedido'],
            ['nome' => 'Pagamento cancelado', 'tipo' => 'pedido']
        ];
        
        DB::table('status')->insert($insert);
    }
    
}
