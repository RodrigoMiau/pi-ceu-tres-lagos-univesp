<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\EventoFaixaEtaria;

class EventoFaixaEtariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventoFaixaEtaria::insert(
            [
                'faixa' => 'L', 
                'title_faixa' => 'LIVRE', 
                'descricao_faixa' => 'Recomendado para todas as idades', 
                'color' => 'bg-green-700'
            ],
            // [
            //     'faixa' => '10', 
            //     'title_faixa' => '10 anos', 
            //     'descricao_faixa' => 'Não recomendado para idades abaixo', 
            //     'color' => 'bg-blue-700'
            // ],
            // [
            //     'faixa' => '12', 
            //     'title_faixa' => '12 anos', 
            //     'descricao_faixa' => 'Não recomendado para idades abaixo', 
            //     'color' => 'bg-yellow-700'
            // ],
            // [
            //     'faixa' => '14', 
            //     'title_faixa' => '14 anos', 
            //     'descricao_faixa' => 'Não recomendado para idades abaixo', 
            //     'color' => 'bg-orange-700'
            // ],
            // [
            //     'faixa' => '16', 
            //     'title_faixa' => '16 anos', 
            //     'descricao_faixa' => 'Não recomendado para idades abaixo', 
            //     'color' => 'bg-red-700'
            // ],
            // [
            //     'faixa' => '18', 
            //     'title_faixa' => '18 anos', 
            //     'descricao_faixa' => 'Não recomendado para idades abaixo', 
            //     'color' => 'bg-black'
            // ]    
        );
    }
}
