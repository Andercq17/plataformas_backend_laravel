<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = Libro::create([
            'nombre'=>"Clean Code",
            'nombre_imagen'=>"b4.jpg",
            'autor'=>"Tio Bob",
            'descripcion'=>"Libro programacion",
            'precio'=>35000,
            'descuento'=>0.3
        ]);
    }
}
