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
                'nome' => 'pastel de nata',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Miniatura Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-14 19:20:52',
                'updated_at' => '2021-05-30 12:39:39',
                'imagem' => 'public/images/rpF5w14cs3SkXgEiIO1TF8bNiK8YMXQpObD8Gqxr.jpg',
            ),
            1 => 
            array (
                'id' => 4,
                'nome' => 'empada de frango',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-16 15:57:04',
                'updated_at' => '2021-05-30 13:36:14',
                'imagem' => 'public/images/WzErlWz7pxVi6j7vQyvqynk2gJMsoqXFC30R5kyy.jpg',
            ),
            2 => 
            array (
                'id' => 21,
                'nome' => 'broa de milho',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Broa',
                'preco' => '0.80',
                'estado' => 1,
                'created_at' => '2021-05-22 14:39:32',
                'updated_at' => '2021-05-30 12:58:29',
                'imagem' => 'public/images/Cn636WE3oK7F4iBrjNnqzHWQKdEa1kk6mSEQkD2a.jpg',
            ),
            3 => 
            array (
                'id' => 22,
                'nome' => 'bolo de aniversário doce de ovos',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Bolos de Aniversário',
                'preco' => '10.00',
                'estado' => 1,
                'created_at' => '2021-05-22 14:45:24',
                'updated_at' => '2021-05-30 13:12:26',
                'imagem' => 'public/images/ko4rVnyRJYCTURO9v20CkgwKxLj9Fyi1abU95YaJ.jpg',
            ),
            4 => 
            array (
                'id' => 23,
                'nome' => 'pão de água',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão',
                'preco' => '0.14',
                'estado' => 1,
                'created_at' => '2021-05-22 15:05:11',
                'updated_at' => '2021-05-30 13:00:28',
                'imagem' => 'public/images/Vt8brh2ISuEyiGhX2kutNjLI1jhYqAWHJGLKi1Sh.jpg',
            ),
            5 => 
            array (
                'id' => 24,
                'nome' => 'broa',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Broa',
                'preco' => '0.80',
                'estado' => 1,
                'created_at' => '2021-05-22 15:07:52',
                'updated_at' => '2021-05-30 12:58:59',
                'imagem' => 'public/images/sgFg8DN3tDiqcHDZxwksMhrSQMXc23wmGbRx8E6m.jpg',
            ),
            6 => 
            array (
                'id' => 25,
                'nome' => 'rissóis',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Salgados Miniatura Diversos',
                'preco' => '0.45',
                'estado' => 1,
                'created_at' => '2021-05-22 15:09:06',
                'updated_at' => '2021-05-30 13:42:21',
                'imagem' => 'public/images/QfAFluIrzstbYkSTIDol9dfzERVUrWZJmNoICvQE.jpg',
            ),
            7 => 
            array (
                'id' => 27,
                'nome' => 'húngaro doce de morango',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sortidos',
                'preco' => '14.00',
                'estado' => 1,
                'created_at' => '2021-05-22 15:15:46',
                'updated_at' => '2021-05-30 13:32:21',
                'imagem' => 'public/images/qKNZg0CW9OH76cp22Yg4Iw1uyf5avOZuDr5zUchC.jpg',
            ),
            8 => 
            array (
                'id' => 28,
                'nome' => 'croissant de chocolate',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 02:17:06',
                'updated_at' => '2021-05-30 12:43:01',
                'imagem' => 'public/images/HA3YBa8b8AH6BU8i7F6H10lGAoULZ2NPVh3hLp6s.jpg',
            ),
            9 => 
            array (
                'id' => 29,
                'nome' => 'pão de centeio',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão',
                'preco' => '0.14',
                'estado' => 1,
                'created_at' => '2021-05-30 11:16:13',
                'updated_at' => '2021-05-30 13:00:55',
                'imagem' => 'public/images/qaIdB75E1WCwBpxb63PSm8wPXlh2YrYmUo6oJDa8.jpg',
            ),
            10 => 
            array (
                'id' => 31,
                'nome' => 'bola de berlim pequena',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Miniatura Diversos',
                'preco' => '0.60',
                'estado' => 1,
                'created_at' => '2021-05-30 12:38:15',
                'updated_at' => '2021-05-30 12:45:53',
                'imagem' => 'public/images/DvNNJ3tlPGYG7jDvHCqndajUsaj6T3AF21xWBTVN.jpg',
            ),
            11 => 
            array (
                'id' => 32,
                'nome' => 'éclair de chocolate pequeno',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Miniatura Diversos',
                'preco' => '0.60',
                'estado' => 1,
                'created_at' => '2021-05-30 12:38:45',
                'updated_at' => '2021-05-30 12:46:59',
                'imagem' => 'public/images/83CTmJej5JeNPH2an7h40OR8khr6eQwr4YscfouT.jpg',
            ),
            12 => 
            array (
                'id' => 33,
                'nome' => 'mil folhas pequeno',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Miniatura Diversos',
                'preco' => '0.60',
                'estado' => 1,
                'created_at' => '2021-05-30 12:39:10',
                'updated_at' => '2021-05-30 12:47:43',
                'imagem' => 'public/images/ayJ1rZjTizNxhuzdKkntYu2UrKD8kUfPMutRw5IZ.jpg',
            ),
            13 => 
            array (
                'id' => 34,
                'nome' => 'croissant de ovo',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 12:44:41',
                'updated_at' => '2021-05-30 12:44:41',
                'imagem' => 'public/images/PX4GllSKLNj4qXGj5mL8mGJohng7RSNDmdU1obmc.jpg',
            ),
            14 => 
            array (
                'id' => 35,
                'nome' => 'croissant simples',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 12:45:11',
                'updated_at' => '2021-05-30 12:45:11',
                'imagem' => 'public/images/2jwMBPcCFwtVhN5oypHoY8OjFy28HwXtuBBoBT3l.jpg',
            ),
            15 => 
            array (
                'id' => 36,
                'nome' => 'bola de berlim',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 12:46:30',
                'updated_at' => '2021-05-30 12:46:30',
                'imagem' => 'public/images/Q7tE9YVjQo4mSfdw3FZOEc92gbpC1sGZCgOWdLxL.jpg',
            ),
            16 => 
            array (
                'id' => 37,
                'nome' => 'éclair de chocolate',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 12:47:20',
                'updated_at' => '2021-05-30 12:47:20',
                'imagem' => 'public/images/tWLlougm2qQogYamMxNQy8H2vKExGUWBRapsduSj.jpg',
            ),
            17 => 
            array (
                'id' => 38,
                'nome' => 'mil folhas',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 12:48:03',
                'updated_at' => '2021-05-30 12:48:03',
                'imagem' => 'public/images/fKKd6oLLw3ozuwt4P9L7PqXz3ejO7V8D0VBg9wc9.jpg',
            ),
            18 => 
            array (
                'id' => 39,
                'nome' => 'pastel de nata pequeno',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Miniatura Diversos',
                'preco' => '0.60',
                'estado' => 1,
                'created_at' => '2021-05-30 12:48:53',
                'updated_at' => '2021-05-30 12:48:53',
                'imagem' => 'public/images/Ik2o7dznvJT5ekPtWYiSw14e32Sz0XssagJPPBFX.jpg',
            ),
            19 => 
            array (
                'id' => 40,
                'nome' => 'queijadas',
                'categoria' => 'Doces',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '0.90',
                'estado' => 1,
                'created_at' => '2021-05-30 12:49:15',
                'updated_at' => '2021-05-30 12:49:15',
                'imagem' => 'public/images/8NbvTf9KZA0U6siiE7ELPu0bL4qp7bQYsekqbkeR.jpg',
            ),
            20 => 
            array (
                'id' => 41,
                'nome' => 'escarpiada',
                'categoria' => 'Doces',
                'sub_categoria' => 'Sobremesas',
                'preco' => '6.00',
                'estado' => 1,
                'created_at' => '2021-05-30 12:53:12',
                'updated_at' => '2021-05-30 13:16:39',
                'imagem' => 'public/images/fwIJ0VU8VyCsm7HZVH9NonytA3eZ7XPSzTYDU6E4.jpg',
            ),
            21 => 
            array (
                'id' => 42,
                'nome' => 'pão de deus',
                'categoria' => 'Doces',
                'sub_categoria' => 'Sobremesas',
                'preco' => '6.00',
                'estado' => 1,
                'created_at' => '2021-05-30 12:53:54',
                'updated_at' => '2021-05-30 12:53:54',
                'imagem' => 'public/images/c8owoevTA3JESBVQ1UlVvPPbqP8Dvl8DAJZHpfxO.jpg',
            ),
            22 => 
            array (
                'id' => 43,
                'nome' => 'pão de ló buraco',
                'categoria' => 'Doces',
                'sub_categoria' => 'Sobremesas',
                'preco' => '6.00',
                'estado' => 1,
                'created_at' => '2021-05-30 12:54:35',
                'updated_at' => '2021-05-30 12:54:35',
                'imagem' => 'public/images/eP5GOX1yMcgHOZpsvWmPBSpFwy1mgWsL2BRa51AQ.jpg',
            ),
            23 => 
            array (
                'id' => 44,
                'nome' => 'pudim de pão',
                'categoria' => 'Doces',
                'sub_categoria' => 'Sobremesas',
                'preco' => '6.00',
                'estado' => 1,
                'created_at' => '2021-05-30 12:54:57',
                'updated_at' => '2021-05-30 12:54:57',
                'imagem' => 'public/images/AZFMROOxWEA0wqcm4MmvnDv8QRYTZw22pCegVgkf.jpg',
            ),
            24 => 
            array (
                'id' => 45,
                'nome' => 'broa pequena',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Broa',
                'preco' => '0.60',
                'estado' => 1,
                'created_at' => '2021-05-30 12:59:25',
                'updated_at' => '2021-05-30 12:59:25',
                'imagem' => 'public/images/JH17hRMNfWdWy4A3vGnsXz33cbIIKic2baFSqtXn.jpg',
            ),
            25 => 
            array (
                'id' => 46,
                'nome' => 'pão de bico',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão',
                'preco' => '0.14',
                'estado' => 1,
                'created_at' => '2021-05-30 13:01:28',
                'updated_at' => '2021-05-30 13:01:28',
                'imagem' => 'public/images/mXeLjjI3KYKVfYldT2yJPzdisyVH95fZqc9qDqkV.jpg',
            ),
            26 => 
            array (
                'id' => 47,
                'nome' => 'pão de mistura',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão',
                'preco' => '0.14',
                'estado' => 1,
                'created_at' => '2021-05-30 13:01:49',
                'updated_at' => '2021-05-30 13:01:49',
                'imagem' => 'public/images/HI392eZR3f6L8Ih7IneX6bJb4G6ZwDYfgmwUo3gb.jpg',
            ),
            27 => 
            array (
                'id' => 48,
                'nome' => 'pão de 0.5kg branco',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão 0,5',
                'preco' => '0.50',
                'estado' => 1,
                'created_at' => '2021-05-30 13:04:05',
                'updated_at' => '2021-05-30 13:04:53',
                'imagem' => 'public/images/59wJtR5jgKPvlZdcWQm2vczSLXzZNzODPD9fdEr6.jpg',
            ),
            28 => 
            array (
                'id' => 49,
                'nome' => 'pão de 0.5kg de mistura',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão 0,5',
                'preco' => '0.50',
                'estado' => 1,
                'created_at' => '2021-05-30 13:04:36',
                'updated_at' => '2021-05-30 13:04:36',
                'imagem' => 'public/images/J1ST36x4weHp8h9Kj5Pgkg7nugdKMBc9fk4p3mPj.jpg',
            ),
            29 => 
            array (
                'id' => 50,
                'nome' => 'pão de forma',
                'categoria' => 'Padaria',
                'sub_categoria' => 'Pão 0,5',
                'preco' => '0.50',
                'estado' => 1,
                'created_at' => '2021-05-30 13:05:17',
                'updated_at' => '2021-05-30 13:05:17',
                'imagem' => 'public/images/lpfaFMiJsRtMh5gKKR856vzf7UBmrMekg3dQFVT5.jpg',
            ),
            30 => 
            array (
                'id' => 51,
                'nome' => 'bolo de batizado',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Bolos de Aniversário',
                'preco' => '10.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:13:06',
                'updated_at' => '2021-05-30 13:13:37',
                'imagem' => 'public/images/NAJJNlJNW7lM6BqfMdazdslvP69bi2DM6nzrDIxj.jpg',
            ),
            31 => 
            array (
                'id' => 52,
                'nome' => 'bolo personalizado',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Bolos de Aniversário',
                'preco' => '10.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:15:41',
                'updated_at' => '2021-05-30 13:15:41',
                'imagem' => 'public/images/jjavmtJ4qbu4QYWCYL1khRf5VqarnekkTVAoD9YS.jpg',
            ),
            32 => 
            array (
                'id' => 53,
                'nome' => 'profiteroles',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sobremesas ao Peso',
                'preco' => '14.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:18:04',
                'updated_at' => '2021-05-30 13:18:04',
                'imagem' => 'public/images/Mn1FeoPL2TwevfdSYfYtC3G9dZA5G6ycLcs2lUIL.jpg',
            ),
            33 => 
            array (
                'id' => 54,
                'nome' => 'parisbrest',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sobremesas ao Peso',
                'preco' => '14.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:18:32',
                'updated_at' => '2021-05-30 13:18:32',
                'imagem' => 'public/images/Jy4HMVGEYLHSrWnM1hqViu0TooZnnAaupv50a1ij.jpg',
            ),
            34 => 
            array (
                'id' => 55,
                'nome' => 'torta de laranja',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sobremesas ao Peso',
                'preco' => '14.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:19:25',
                'updated_at' => '2021-05-30 13:19:25',
                'imagem' => 'public/images/UEzsuIbzcDyCvYJygOsnOjXHg7C4eXi0NoQbTxFb.jpg',
            ),
            35 => 
            array (
                'id' => 56,
                'nome' => 'folhado misto',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Pastéis Diversos',
                'preco' => '1.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:35:48',
                'updated_at' => '2021-05-30 13:35:48',
                'imagem' => 'public/images/JeRgfvuNIhiwMmowxeTDs0msUkkOspdprW3NPi9x.jpg',
            ),
            36 => 
            array (
                'id' => 57,
                'nome' => 'pizza de kebab',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Pizzas, Bolas e Quiches',
                'preco' => '10.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:37:13',
                'updated_at' => '2021-05-30 13:37:13',
                'imagem' => 'public/images/alf152l41VtVwlwa7ylmhBEGFDuxCJIvXQAjNnVh.jpg',
            ),
            37 => 
            array (
                'id' => 58,
                'nome' => 'pizza mista',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Pizzas, Bolas e Quiches',
                'preco' => '10.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:37:41',
                'updated_at' => '2021-05-30 13:37:41',
                'imagem' => 'public/images/jMHhbN2Y80ZZJ4piQxmh0pwgtk88IEQadDXkwxHv.jpg',
            ),
            38 => 
            array (
                'id' => 59,
                'nome' => 'bolos de bacalhau',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Salgados Miniatura Diversos',
                'preco' => '0.45',
                'estado' => 1,
                'created_at' => '2021-05-30 13:42:05',
                'updated_at' => '2021-05-30 13:42:05',
                'imagem' => 'public/images/K712TOT3ankn05CHgo9OQpG05eKnu02IirCZeLkt.jpg',
            ),
            39 => 
            array (
                'id' => 60,
                'nome' => 'croquetes',
                'categoria' => 'Salgados',
                'sub_categoria' => 'Salgados Miniatura Diversos',
                'preco' => '0.45',
                'estado' => 1,
                'created_at' => '2021-05-30 13:42:45',
                'updated_at' => '2021-05-30 13:42:45',
                'imagem' => 'public/images/Y0Pg5OLWgiW4BAz3HKLw76IeUUP13f5b4BPvuW62.jpg',
            ),
            40 => 
            array (
                'id' => 61,
                'nome' => 'húngaro de chocolate',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sortidos',
                'preco' => '14.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:43:27',
                'updated_at' => '2021-05-30 13:43:27',
                'imagem' => 'public/images/71FCsH4npN6bEtemjY7YnXLzAA7ERdOKumYs3twK.jpg',
            ),
            41 => 
            array (
                'id' => 62,
                'nome' => 'sortidos de doce de ovos',
                'categoria' => 'Produtos ao Peso',
                'sub_categoria' => 'Sortidos',
                'preco' => '14.00',
                'estado' => 1,
                'created_at' => '2021-05-30 13:44:25',
                'updated_at' => '2021-05-30 13:44:25',
                'imagem' => 'public/images/LXRhzZjUBKvQmZJFyNJckm4y6dggEobuq2XzbHrG.jpg',
            ),
        ));
        
        
    }
}