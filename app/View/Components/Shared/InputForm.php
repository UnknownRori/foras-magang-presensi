<?php

namespace App\View\Components\Shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputForm extends Component
{
    public string  $id;
    public string  $type;
    public string  $placeholder;
    public ?bool   $isNotRequired = true;
    public ?string $title = null;
    public ?string $value = null;
    public ?string $msg = null;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $id,
        string $type,
        string $placeholder,
        ?bool $isNotRequired = false,
        ?string $title = null,
        ?string $value = null,
        ?string $msg = null,
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->isNotRequired = $isNotRequired;
        $this->title = $title;
        $this->value = $value;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.input-form');
    }
}
