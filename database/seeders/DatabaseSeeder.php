<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'email' => 'admin@app.com',
            'name' => config('app.name')
        ]);
//        Branch::factory(20)->create();
//        Service::factory(20)->create();
//        Category::factory(20)->create();
        Project::factory(20)->create();
//        Slider::factory(20)->create();
//        Partner::factory(6)->create();
//        Blog::factory(20)->for($user)->create();
    }
}
