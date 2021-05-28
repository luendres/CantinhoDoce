<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produtos')->delete();
        
        \DB::table('produtos')->insert(array (
            0 => 
            array (
                'id' => 3,
                'nome' => 'Pastel de nata',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Miniatura Diversos',
                'preco' => '0.80',
                'estado' => 1,
                'created_at' => '2021-05-14 19:20:52',
                'updated_at' => '2021-05-20 15:27:54',
                'imagem' => 'public/images/RpU9VghraEjNJGZonTvgygVVHU5hPBr7aretDazI.jpg',
            ),
            1 => 
            array (
                'id' => 4,
                'nome' => 'Empada',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Pizzas, Bolas e Quiches',
                'preco' => '0.80',
                'estado' => 1,
                'created_at' => '2021-05-16 15:57:04',
                'updated_at' => '2021-05-22 15:03:30',
                'imagem' => 'public/images/t2xVChNoOo1Zm3lU81NQexDqcS6dtGy5c2tKvJtq.jpg',
            ),
            2 => 
            array (
                'id' => 8,
                'nome' => 'Croissant Misto',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '1.20',
                'estado' => 1,
                'created_at' => '2021-05-19 16:31:04',
                'updated_at' => '2021-05-20 13:38:44',
                'imagem' => 'public/images/AgjYaX5AiyvpLbGF6hbf95Bg4Z1nStkTpkhKLmCu.jpg',
            ),
            3 => 
            array (
                'id' => 10,
                'nome' => 'Pudim',
                'categoria' => 'Doces',
                'sub_categoria' => 'Sobremesas',
                'preco' => '2.50',
                'estado' => 1,
                'created_at' => '2021-05-19 16:51:24',
                'updated_at' => '2021-05-22 15:01:08',
                'imagem' => 'public/images/CjTFiVOggsRSyGufGxuQ3wsThuTpMHl1mRCDXjcw.jpg',
            ),
            4 => 
            array (
                'id' => 12,
                'nome' => 'Bolo de Chocolate',
                'categoria' => 'Doces',
                'sub_categoria' => 'Sobremesas',
                'preco' => '1.90',
                'estado' => 1,
                'created_at' => '2021-05-20 14:24:08',
                'updated_at' => '2021-05-20 14:28:07',
                'imagem' => 'public/images/jY5edPqWcrzFVZE6yVuq6Ncvxl0GIUTbfgVsCcik.jpg',
            ),
            5 => 
            array (
                'id' => 21,
                'nome' => 'Broa de Milho',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Broa Pequena',
                'preco' => '1.50',
                'estado' => 1,
                'created_at' => '2021-05-22 14:39:32',
                'updated_at' => '2021-05-22 14:39:32',
                'imagem' => 'public/images/0h0l2gb2OkuT6VM9pAb52ZtfikRcXxTVutpXYwFC.jpg',
            ),
            6 => 
            array (
                'id' => 22,
                'nome' => 'Bolo Mil Folhas',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Bolos de Aniversário',
                'preco' => '9.00',
                'estado' => 1,
                'created_at' => '2021-05-22 14:45:24',
                'updated_at' => '2021-05-22 14:45:24',
                'imagem' => 'public/images/if3P9SDNo2L2ieEP6k9nKpe1lejp0u4w39ts3DPs.jpg',
            ),
            7 => 
            array (
                'id' => 23,
                'nome' => 'Pão de Trigo',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão 0,5',
                'preco' => '0.30',
                'estado' => 1,
                'created_at' => '2021-05-22 15:05:11',
                'updated_at' => '2021-05-22 15:05:11',
                'imagem' => 'public/images/1DEEypNhjymPyMBEJ5a9i5ozbiZZWK096ZahOeDV.jpg',
            ),
            8 => 
            array (
                'id' => 24,
                'nome' => 'Broa',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Broa Grande',
                'preco' => '1.90',
                'estado' => 1,
                'created_at' => '2021-05-22 15:07:52',
                'updated_at' => '2021-05-22 15:07:52',
                'imagem' => 'public/images/fSraieLC5pdyJ8ef4uidiVrzltl4QPz3bOiDGrYt.jpg',
            ),
            9 => 
            array (
                'id' => 25,
                'nome' => 'Rissóis de Carne',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Rissóis',
                'preco' => '1.00',
                'estado' => 1,
                'created_at' => '2021-05-22 15:09:06',
                'updated_at' => '2021-05-22 15:09:06',
                'imagem' => 'public/images/HVFlZeIZQFi5bucBACuW9DLuYg0PGOpzgnRAmrws.jpg',
            ),
            10 => 
            array (
                'id' => 26,
                'nome' => 'Tarte Gelada',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sobremesas',
                'preco' => '5.60',
                'estado' => 1,
                'created_at' => '2021-05-22 15:13:49',
                'updated_at' => '2021-05-22 15:13:49',
                'imagem' => 'public/images/iFnMgiQM8JcVsukONRizJ8wt8se6tJdt3C8eG7Ge.jpg',
            ),
            11 => 
            array (
                'id' => 27,
                'nome' => 'Miniaturas Doces',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sortidos',
                'preco' => '4.50',
                'estado' => 1,
                'created_at' => '2021-05-22 15:15:46',
                'updated_at' => '2021-05-22 15:15:46',
                'imagem' => 'public/images/oKTSA4eNTuw4U3g28c9lvvy0PPkmZAXSlfH026jI.jpg',
            ),
        ));
        
        
    }
}