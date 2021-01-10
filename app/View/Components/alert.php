<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public string $type;
    public ?string $dismissible;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type, string $dismissible = null)
    {
        $this->type = $type;
        $this->dismissible = $dismissible;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
