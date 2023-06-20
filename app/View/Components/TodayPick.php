<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodayPick extends Component
{
    /**
     * Create a new component instance.
     */

    public $todayItem;
    public function __construct($todayItem)
    {
        $this->todayItem = $todayItem;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.today-pick');
    }
}
