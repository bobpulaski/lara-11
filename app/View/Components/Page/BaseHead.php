<?php

namespace App\View\Components\Page;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseHead extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;

    public function __construct($title = 'Laravel') // Значение по умолчанию
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page.base-head');
    }
}
