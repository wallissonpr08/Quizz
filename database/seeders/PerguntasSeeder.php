<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pergunta::create([
            'texto' => 'Qual organela é responsável pela produção de energia nas células eucarióticas?',
            'opcao_a' => 'Lisossomo',
            'opcao_b' => 'Mitocôndria',
            'opcao_c' => 'Ribossomo',
            'opcao_d' => 'Complexo de Golgi',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual desses países não faz fronteira com o Brasil?',
            'opcao_a' => 'Uruguai',
            'opcao_b' => 'Chile',
            'opcao_c' => 'Bolívia',
            'opcao_d' => 'Venezuela',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual dessas linguagens é usada principalmente para estilizar páginas web?',
            'opcao_a' => 'HTML',
            'opcao_b' => 'Python',
            'opcao_c' => 'CSS',
            'opcao_d' => 'Java',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem é o autor da obra O Pequeno Príncipe?',
            'opcao_a' => 'Antoine de Saint-Exupéry',
            'opcao_b' => 'Victor Hugo',
            'opcao_c' => 'Monteiro Lobato',
            'opcao_d' => 'J. K. Rowling',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o planeta mais próximo do Sol?',
            'opcao_a' => 'Terra',
            'opcao_b' => 'Marte',
            'opcao_c' => 'Vênus',
            'opcao_d' => 'Mercúrio',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
