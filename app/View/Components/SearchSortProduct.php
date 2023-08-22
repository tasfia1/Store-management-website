<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchSortProduct extends Component
{
    public int $sortMode;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $sortMode)
    {
        $this->sortMode = $sortMode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-sort-product');
    }
}
