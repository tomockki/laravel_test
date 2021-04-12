<?php

use Illuminate\Database\Seeder;
use App\models\blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(blog::class, 15)->create();
    }
}
