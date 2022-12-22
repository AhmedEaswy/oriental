<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LangTextArea extends Component
{
    public string $title;
    public string $name;

    /**
     * @param string $name
     * @param string|null $title
     */
    public function __construct(string $name = 'content',string $title = null)
    {
        $this->title = $title ?? $name;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.lang-text-area');
    }
}