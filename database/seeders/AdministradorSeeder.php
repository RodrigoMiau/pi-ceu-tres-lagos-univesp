<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Administrador;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrador::create([
            'nome_local' => 'CEU TRÊS LAGOS',
            'cep' => '04855257',
            'endereco' => 'Rua Maria Moura da Conceição',
            'numero' => 'S/N',
            'bairro' => 'Jd. Belcito',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'email' => 'ceutreslagoscultura@sme.prefeitura.sp.gov.br',
            'contato' => '1159765608',
        ]);
    }
}
