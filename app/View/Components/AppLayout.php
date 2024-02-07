<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Projects', 'href' => '#portfolio'],
            ['label' => 'Coding Tutorials', 'href' => '#tutorials'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.app');
    }
}
