<?php

namespace Database\Seeders;

use App\Models\Sentence;
use Illuminate\Database\Seeder;

class SentenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: Crear oraciones de órdenes comunes como "Haz tu maldito proyecto de grado :(" 😀
        $sentences = [
            ['Haz','tu maldito proyecto de grado :('],
            ['Come','tus vegetales'],
            ['Ahorra','tu dinero'],
            ['Termina','tu relación toxica'],
        ];

        foreach ($sentences as $sentence) {
            Sentence::create([
                'imperative' => $sentence[0],
                'phrase' => $sentence[1],
            ]);
        }
    }
}
