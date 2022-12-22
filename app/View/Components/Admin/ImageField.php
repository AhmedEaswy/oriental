<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ImageField extends Component
{
    public string $title;
    public string $name;
    public ?string $value;

    /**
     * ImageInput constructor.
     */
    public function __construct(string $title = null, string $name = "image", string $value = null)
    {
        $this->title = $title ?? $name;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::admin.image-field');
    }
}
