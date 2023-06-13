<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Item;

class ItemCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;
    public $items;

    public function __construct($items, $user)
    {
        $this->items = $items;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-card');
    }
}
