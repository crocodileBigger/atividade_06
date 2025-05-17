<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        FakerFactory::create()->unique(true);
        $this->call([
            CategorySeeder::class,
            AuthorPublisherBookSeeder::class
        ]);
    }
}
