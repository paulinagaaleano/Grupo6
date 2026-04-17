<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CatalogoController extends Controller 
{
    public function index() {
        $categorias = [
        (object)[
            'nombre' => 'Labiales',
            'slug' => 'labiales',
            'imagen' => 'Portada/portadaLabiales.jpg' // Asegurate que la extensión sea .png o .jpg según tu archivo
        ],
        (object)[
            'nombre' => 'Bases',
            'slug' => 'bases',
            'imagen' => 'Portada/portadaBase2.jpg'
        ],
        (object)[
            'nombre' => 'Correctores',
            'slug' => 'correctores',
            'imagen' => 'Portada/portadaCorrector.jpg'
        ],
        (object)[
            'nombre' => 'Contorno',
            'slug' => 'contorno',
            'imagen' => 'Portada/portadaContorno.jpg'
        ],
        (object)[
            'nombre' => 'Iluminadores',
            'slug' => 'iluminadores',
            'imagen' => 'Portada/portadaIluminador2.jpg'
        ],
        (object)[
            'nombre' => 'Rubores',
            'slug' => 'rubores',
            'imagen' => 'Portada/portadaRubor.jpg'
        ],
        (object)[
            'nombre' => 'Rimmel',
            'slug' => 'rimmels',
<<<<<<< HEAD
            'imagen' => 'portadaRimmel.webp'
=======
            'imagen' => 'Portada/portadaRimmel.jpg'
>>>>>>> c23727ee5735e95ec80bb0d8b6d9c0ca4eba6631
        ],
        (object)[
            'nombre' => 'Polvos',
            'slug' => 'polvos',
<<<<<<< HEAD
            'imagen' => 'polvo.webp'
=======
            'imagen' => 'Portada/portadaPolvo.webp'
>>>>>>> c23727ee5735e95ec80bb0d8b6d9c0ca4eba6631
        ]
    ];
        return view('catalogo.categorias', compact('categorias'));
    }


    public function show($categoria) {
    $todoElCatalogo = [
        'labiales' => [
            ['nombre' => 'Lip Matte Cream', 'precio' => '28.500', 'img' => 'Catalogo/lab1.webp'],
            ['nombre' => 'Lip Balm Sel', 'precio' => '25.000', 'img' => 'Catalogo/lab2.webp'],
            ['nombre' => 'Kind Matte Lipstick', 'precio' => '30.000', 'img' => 'Catalogo/lab3.webp'],
            ['nombre' => 'Glossy Lip Oil', 'precio' => '27.000', 'img' => 'Catalogo/lab4.webp'],
        ],
        'bases' => [
            ['nombre' => 'Liquid Touch Weightless Foundation', 'precio' => '45.000', 'img' => 'Catalogo/bas1.webp'],
            ['nombre' => 'Positive Light Tinted Moisturizer', 'precio' => '42.000', 'img' => 'Catalogo/bas2.webp'],
            ['nombre' => 'True to Myself Natural Matte Longwear Foundation', 'precio' => '37.000', 'img' => 'Catalogo/bas3.webp'],
        ],
       'rubores' => [
            ['nombre' => 'Soft Pinch Liquid Blush', 'precio' => '32.000', 'img' => 'Catalogo/rub1.webp'],
            ['nombre' => 'Stay Vulnerable Melting Blush', 'precio' => '29.500', 'img' => 'Catalogo/rub2.webp'],
       ],
        'rimmels' => [
            ['nombre' => 'Perfect Strokes Universal Volumizing Mascara', 'precio' => '25.000', 'img' => 'Catalogo/rim1.webp'],
        ],
        'polvos' => [
            ['nombre' => 'True To Myself Tinted Pressed Finishing Powder', 'precio' => '25.200', 'img' => 'Catalogo/polvo.webp'],
        ],
        'rubores' => [
            ['nombre' => 'Soft Pinch Liquid Blush', 'precio' => '15.000', 'img' => 'Catalogo/rub1.webp'],
            ['nombre' => 'Soft Pooch Blush Dog Toy - Faith', 'precio' => '42.000', 'img' => '<Catalogo/rub2.webp'],
        ],
    ];

    // 2. Buscamos los productos de la categoría que pidió el usuario
    $categoriaKey = strtolower($categoria);
    $listaProductos = $todoElCatalogo[$categoriaKey] ?? [];

    // 3. Enviamos los datos a la vista
    return view('catalogo.productos', [
        'categoria' => ucfirst($categoria),
        'productos' => $listaProductos,
        'total'     => count($listaProductos)
    ]);
}
}
