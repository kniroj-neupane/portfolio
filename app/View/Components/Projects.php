<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Projects extends Component
{
    public array $items = [];
    public array $tabs = [];
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel','Tailwind.css','Alpine.js'],
                'title' => 'Portfolio',
                'image' => url('/img/portfolio.png'),
                'github' => 'https://github.com/kniroj-neupane/portfolio'
            ],
            [
                'category' => ['Laravel','Tailwind.css','Vue.js'],
                'title' => 'Ecommerce',
                'image' => url('/img/ecommerce.png'),
                'github' => 'https://github.com/kniroj-neupane/ecommerce'
            ]
        ];
        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.projects');
    }
}
