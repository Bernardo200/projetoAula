<?php

use Illuminate\Database\Seeder;
use App\exercicios;

class exerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        exercicios::create([
            'titulo' => 'Prova de Matemática',
            'texto' => 'Prova sobre números imaginários',
            'autor' => 'eu'
        ]);

        exercicios::create([
            'titulo' => 'Desenvolver o trabalho de Tópicos Especiais',
            'texto' => 'Implementar o trabalho final da disciplina',
            'autor' => 'eu'
        ]);
    }
}
