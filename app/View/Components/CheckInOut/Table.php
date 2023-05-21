<?php

namespace App\View\Components\CheckInOut;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.

     * @param array<CheckIn|CheckOut> $data
     */
    public function __construct(public array $value)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.check-in-out.table');
    }
}
