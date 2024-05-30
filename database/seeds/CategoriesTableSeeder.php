<?php

use App\Category;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            (object) array('id' => 1, 'parent_id' => null, 'name' => 'Tehnička podrška'),
            (object) array('id' => 2, 'parent_id' => 1, 'name' => 'Domeni'),
            (object) array('id' => 3, 'parent_id' => 1, 'name' => 'Hosting'),
            (object) array('id' => 4, 'parent_id' => 1, 'name' => 'Mejlovi'),

            (object) array('id' => 5, 'parent_id' => null, 'name' => 'Wordpress'),
            (object) array('id' => 6, 'parent_id' => 5, 'name' => 'Divi'),
            (object) array('id' => 7, 'parent_id' => 5, 'name' => 'Elementor'),
            (object) array('id' => 8, 'parent_id' => 5, 'name' => 'Gutenberg'),
            (object) array('id' => 9, 'parent_id' => 5, 'name' => 'Litespeed'),
            (object) array('id' => 10, 'parent_id' => 5, 'name' => 'WPML'),
            (object) array('id' => 11, 'parent_id' => 5, 'name' => 'Jetpack'),

            (object) array('id' => 12, 'parent_id' => null, 'name' => 'Laravel'),

            (object) array('id' => 13, 'parent_id' => null, 'name' => 'Izrada aplikacija'),
            (object) array('id' => 14, 'parent_id' => 13, 'name' => 'Flutter'),
            (object) array('id' => 15, 'parent_id' => 13, 'name' => 'Unity'),

            (object) array('id' => 16, 'parent_id' => null, 'name' => 'SEO'),
            (object) array('id' => 17, 'parent_id' => null, 'name' => 'Keširanje/Ubrzavanje'),
            (object) array('id' => 18, 'parent_id' => null, 'name' => 'Migracija'),
        );

        foreach($categories as $category) {
            Category::create(array(
                'id' => $category->id, 
                'name' => $category->name, 
                'slug' => SlugService::createSlug(Category::class, 'slug', $category->name), 
                'parent_id' => $category->parent_id)
            );
        }
    }
}
