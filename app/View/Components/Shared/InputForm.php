<?php

namespace App\View\Components\Shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public string $type,
        public string $placeholder,
        public ?string $value = null,
        public ?string $msg = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.input-form');
    }
}
