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
            'imagen' => 'portadaLabiales.jpg' // Asegurate que la extensión sea .png o .jpg según tu archivo
        ],
        (object)[
            'nombre' => 'Bases',
            'slug' => 'bases',
            'imagen' => 'portadaBase2.jpg'
        ],
        (object)[
            'nombre' => 'Correctores',
            'slug' => 'correctores',
            'imagen' => 'portadaCorrector.jpg'
        ],
        (object)[
            'nombre' => 'Contorno',
            'slug' => 'contorno',
            'imagen' => 'portadaContorno.jpg'
        ],
        (object)[
            'nombre' => 'Iluminadores',
            'slug' => 'iluminadores',
            'imagen' => 'portadaIluminador2.jpg'
        ],
        (object)[
            'nombre' => 'Rubores',
            'slug' => 'rubores',
            'imagen' => 'portadaRubor.jpg'
        ],
        (object)[
            'nombre' => 'Rimmel',
            'slug' => 'rimmels',
            'imagen' => 'portadaRimmel.webp'
        ],
        (object)[
            'nombre' => 'Polvos',
            'slug' => 'polvos',
            'imagen' => 'polvo.webp'
        ]
    ];
        return view('catalogo.categorias', compact('categorias'));
    }

    public function show($categoria) {
    // 1. Definimos el "gran catálogo" de Aura Beauty
    $todoElCatalogo = [
        'labiales' => [
            ['nombre' => 'Lip Matte Cream', 'precio' => '28.500', 'img' => 'lab1.webp'],
            ['nombre' => 'Lip Balm Sel', 'precio' => '25.000', 'img' => 'lab2.webp'],
            ['nombre' => 'Kind Matte Lipstick', 'precio' => '30.000', 'img' => 'lab3.webp'],
            ['nombre' => 'Glossy Lip Oil', 'precio' => '27.000', 'img' => 'lab4.webp'],
        ],
        'bases' => [
            ['nombre' => 'Liquid Touch Weightless Foundation', 'precio' => '45.000', 'img' => 'bas1.webp'],
            ['nombre' => 'Positive Light Tinted Moisturizer', 'precio' => '42.000', 'img' => 'bas2.webp'],
        ],
        'rubores' => [
            ['nombre' => 'Soft Pinch Liquid Blush', 'precio' => '32.000', 'img' => 'rub1.webp'],
            ['nombre' => 'Stay Vulnerable Melting Blush', 'precio' => '29.500', 'img' => 'rub2.webp'],
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
