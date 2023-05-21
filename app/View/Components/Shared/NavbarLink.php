<?php

namespace App\View\Components\Shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.navbar-link');
    }
}
