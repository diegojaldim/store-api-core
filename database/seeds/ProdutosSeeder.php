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
            [
                'id' => '1002',
                'nome' => 'Mesa de Jantar Retangular 4 Lugares Liv Branco e Natural',
                'descricao' => 'Que tal garantir uma decoração moderna em seu lar? Conte com a Mesa de Jantar Liv! Elegante, o móvel conta com um design moderno e é dona de um charme especial: seus pés em formato palito são sofisticadíssimos e garantem à peça um “ar” retrô. Gostou? Ela acomoda até 4 pessoas em seu formato retangular. Aproveite!',
                'preco' => 949.99,
                'imagem' => 'https://staticmobly.akamaized.net/p/ProvC3ADncia-Mesa-de-Jantar-Retangular-4-Lugares-Liv-Branco-e-Natural-8358-588574-2-zoom.jpg'
            ],
            [
                'id' => '1003',
                'nome' => 'Armário Multiuso Roma 2 Portas C/ Fechadura Branco',
                'descricao' => 'Um móvel essencial para o lar não precisa ter um visual batido e sem graça, prova disso é esse incrível Conjunto Tóquio. Composto por 2 cadeiras confeccionadas com MDF e madeira eucalipto, o conjunto possui um design extremamente moderno e atraente. O encosto da cadeira é levemente curvada para que você acomode suas costas e isso também traz mais charme a peça. A cor preta ajuda a deixar o ambiente mais sóbrio. Não é demais?',
                'preco' => 465.99,
                'imagem' => 'https://staticmobly.akamaized.net/p/Santista-Cobre-Leito-Casal-Santista-Prata-150-Fios-3-PeC3A7as-Joana-Piscina---Santista-3557-113605-1-zoom.jpg'
            ],
            [
                'id' => '1004',
                'nome' => 'Cama Infantil Montessoriano com Cercado Unissex Branco', 
                'descricao' => 'A Cama Infantil Montessoriano com Cercado é a opção perfeita para o quarto montessoriano do seu bebe! Linda, ela possui a altura mais baixa do que as camas usuais, desta forma a criança cria a autonomia para deitar ou levantar e explorar o ambiente quando quiser! Confeccionada em mdf e madeira taeda, sua cor branca garante uma decoração clean e leve. Seu design de casinha é uma fofura e vai garantir que o espaço fique ainda mais charmoso e aconchegante. Reparou na cerca que envolve a cama? Ela acaba protegendo o seu bebe durante o sono. Demais, não é? Aproveite para decorar a peça com luzes e ursinhos. Leva!',
                'preco' => 509.99,
                'imagem' => 'https://staticmobly.akamaized.net/p/Mobly-Cama-Infantil-Montessoriano-com-Cercado-Unissex-Branco-8292-386315-2-zoom.jpg'
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
                'categoria_id' => '2',
                'produto_id' => '1001'
            ],
            [
                'categoria_id' => '3',
                'produto_id' => '1001'
            ],
            [
                'categoria_id' => '4',
                'produto_id' => '1001'
            ],
        ];
    }
    
}
