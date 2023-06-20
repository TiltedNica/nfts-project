<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class Card extends Component
{
    /**
     * Create a new component instance.
     */

    public $user;
    public $items;
    public $item;


    public function __construct($user, $item, $items)
    {
        $this->items = $items;
        $this->user = $user;
        $this->item = $item;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
