<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Desarrollo Web',
            'slug' => Str::slug('Desarrollo Web')
        ]);

        $category = Category::create([
            'name' => 'Diseño Gráfico',
            'slug' => Str::slug('Diseño Gráfico')
        ]);

        $category = Category::create([
            'name' => 'Marketing Digital',
            'slug' => Str::slug('Marketing Digital')
        ]);

        $category = Category::create([
            'name' => 'Fotografía',
            'slug' => Str::slug('Fotografía')
        ]);

        $category = Category::create([
            'name' => 'Producción de Video',
            'slug' => Str::slug('Producción de Video')
        ]);

        $category = Category::create([
            'name' => 'Producción de Audio',
            'slug' => Str::slug('Producción de Audio')
        ]);
    }
}
