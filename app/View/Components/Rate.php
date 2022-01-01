<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Rate extends Component
{
    public $totalRatings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $totalRatings)
    {
        $this->totalRatings = $totalRatings;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rate');
    }
}
