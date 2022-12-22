<?php

namespace App\View\Components\Frontend\Layout;

use App\Models\Blog;
use Illuminate\View\Component;

class Footer extends Component
{
    public function render()
    {
      $blogs = Blog::take(3)->get();
        return view('components::frontend.layout.footer', compact('blogs'));
    }
}
