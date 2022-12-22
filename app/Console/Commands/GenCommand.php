<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Console\Command;

class GenCommand extends Command
{
    protected $signature = 'command:name';

    protected $description = 'Command description';

    public function handle()
    {
        foreach ([Blog::class, Service::class, User::class, Project::class, Category::class, Slider::class, Contact::class, Branch::class] as $name) {
            $obj = new $name();
            $this->call('datatables:make', ['name' => class_basename($obj), '--table' => $obj->getTable(), '--columns' => $obj->getFillable(), '--model' => $name]);
            $this->info($name);
        }
    }
}
