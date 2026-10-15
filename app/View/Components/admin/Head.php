<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $href,
        public string $link,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.head');
    }
}
