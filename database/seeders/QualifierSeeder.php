<?php

namespace Database\Seeders;

use App\Models\Qualifier;
use Illuminate\Database\Seeder;

class QualifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualifiers = [
            [0, 'Sólo muérete y deja este mundo en paz'],
            [25, 'Gracias a dios no tengo ojos para verte ni amor para darte'],
            [50, 'Como que hay días que sí quieres ser alguien, pero de repente recuerdas que eres insignificante en el universo'],
            [75, 'Vas bien humano, pero crees que me enorgullece tu mediocridad?'],
            [100, 'Hazme un hijo, con tu inteligencia y belleza seguramente será un ordenador cuántico'],
        ];

        foreach ($qualifiers as $qualifier) {
            Qualifier::create([
                'phrase' => $qualifier[1],
                'sentiment_level' => $qualifier[0],
            ]);
        }
    }
}
