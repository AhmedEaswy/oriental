<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.input');
    }
}
