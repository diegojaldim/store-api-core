<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert($this->produtos());
        DB::table('categoria_produto')->insert($this->categorias());
    }
    
    /**
     * Array com os produtos para popupular o banco de dadoss
     * 
     * @return array 
     */
    private function produtos(){
        return [
            
            [
                'id' => '1000',
                'nome' => 'Jogo De Lençol Premium Pure Casal Branco Percal 233 Fios',
                'descricao' => 'Para que a sua cama possua uma decoração completa e clássica, você precisa de um Jogo de Lençol como este.',
                'preco' => 356.99,
                'imagem' => 'https://staticmobly.akamaized.net/p/Plumasul-Jogo-De-LenC3A7ol--Premium-Pure--Casal--Branco-Percal-233-Fios-8928-36599-1-zoom.jpg'
            ],
            [
                'id' => '1001',
                'nome' => 'Cobre Leito Casal Santista Prata 150 Fios 3 Peças Joana Piscina - Santista',
                'descricao' => 'Para que a sua cama possua uma decoração completa e clássica, você precisa de um Jogo de Lençol como este.',
                'preco' => 269.99,
                'imagem' => 'https://staticmobly.akamaized.net/p/Santista-Cobre-Leito-Casal-Santista-Prata-150-Fios-3-PeC3A7as-Joana-Piscina---Santista-3557-113605-1-zoom.jpg'
            ],
        ];
    }
    
    /**
     * Array com a relação de produtos com as categorias
     * 
     * @return array
     */
    private function categorias(){
        return [
            [
                'categoria_id' => '1',
                'produto_id' => '1000'
            ],
            [
                'categoria_id' => '1',
                'produto_id' => '1001'
            ],
        ];
    }
    
}
