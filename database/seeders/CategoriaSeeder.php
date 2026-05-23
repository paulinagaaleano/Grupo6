<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $categoriasData = [
            [
                'nombre' => 'BASES LÍQUIDAS',
                'slug' => 'bases',
                'imagen' => 'img/Portada/portadaBase.jpg',
                'descripcion' => 'Resaltá tu belleza natural con nuestra línea de Bases Líquidas de alta calidad.'
            ],
            [
                'nombre' => 'LABIALES',
                'slug' => 'labiales',
                'imagen' => 'img/Portada/portadaLabial.jpg',
                'descripcion' => 'Tonos vibrantes y texturas sedosas para unos labios inolvidables.'
            ],
            [
                'nombre' => 'CORRECTORES',
                'slug' => 'correctores',
                'imagen' => 'img/Portada/portadaCorrector.jpg',
                'descripcion' => 'Cubrí imperfecciones con una textura ligera y natural.'
            ],
            [
                'nombre' => 'ILUMINADORES',
                'slug' => 'iluminadores',
                'imagen' => 'img/Portada/portadaIluminador.jpg',
                'descripcion' => 'Destellos de luz que resaltan lo mejor de tus facciones.'
            ],
            [
                'nombre' => 'RUBORES',
                'slug' => 'rubores',
                'imagen' => 'img/Portada/portadaRubor.jpg',
                'descripcion' => 'Aportá frescura y color a tus mejillas con tonos irresistibles.'
            ],
            [
                'nombre' => 'POLVOS COMPACTOS',
                'slug' => 'polvos',
                'imagen' => 'img/Portada/portadaPolvo.webp',
                'descripcion' => 'Sellá tu maquillaje para un acabado impecable y duradero.'
            ],
        ];

        foreach ($categoriasData as $cat) {
            Categoria::create($cat);
        }
    }
}
