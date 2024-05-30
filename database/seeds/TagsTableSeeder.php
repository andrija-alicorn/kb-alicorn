<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = ['CSS', 'jQuery', 'JavaScript', 'PHP', 'MySql', 'C#'];

        foreach($tags as $id => $tags)
            Tag::create(['name' => $tags, 'slug' => SlugService::createSlug(Tag::class, 'slug', $tags)]);
    }
}
