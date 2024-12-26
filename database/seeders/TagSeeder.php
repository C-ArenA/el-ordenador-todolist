<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: Crear tags comunes
        $tags = [
            ['Estudio','#ff5733'],
            ['Trabajo','#336bff'],
            ['Familia','#33ff8d'],
            ['Amigos','#6f7eed'],
        ];

        foreach ($tags as $tag){
            Tag::create([
                'name' => $tag[0],
                'color' => $tag[1],
            ]);
        }
    }
}
