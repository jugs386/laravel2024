<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([
            'titulo' => 'O Senhor dos Anéis',
            'autor' => 'J.R.R. Tolkien',
            'ano_publicacao' => 1954,
            'resumo' => 'Uma aventura épica pela Terra Média.',
            ]);
            Livro::create([
                'titulo' => 'O Senhor dos Anéis',
                'autor' => 'J.R.R. Tolkien',
                'ano_publicacao' => 1954,
                'resumo' => 'Uma aventura épica pela Terra Média.',
                ]);
                Livro::create([
                    'titulo' => 'O Senhor dos Anéis',
                    'autor' => 'J.R.R. Tolkien',
                    'ano_publicacao' => 1954,
                    'resumo' => 'Uma aventura épica pela Terra Média.',
                    ]);
                    Livro::create([
                        'titulo' => 'O Senhor dos Anéis',
                        'autor' => 'J.R.R. Tolkien',
                        'ano_publicacao' => 1954,
                        'resumo' => 'Uma aventura épica pela Terra Média.',
                        ]);
                        Livro::create([
                            'titulo' => 'O Senhor dos Anéis',
                            'autor' => 'J.R.R. Tolkien',
                            'ano_publicacao' => 1954,
                            'resumo' => 'Uma aventura épica pela Terra Média.',
                            ]);
    }
}
