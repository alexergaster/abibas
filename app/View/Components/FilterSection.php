<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterSection extends Component
{
    public string $title;
    public  $items;
    public string $filter;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title,  $items, string $filter)
    {
        $this->title = $title;
        $this->items = $items;
        $this->filter = $filter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter-section');
    }
}
