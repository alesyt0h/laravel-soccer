<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Listing extends Component
{
    public $entity;
    public $type;
    public $from;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($entity, $type, $from)
    {
        $this->entity = $entity;
        $this->type = $type;
        $this->from = $from;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listing');
    }
}
