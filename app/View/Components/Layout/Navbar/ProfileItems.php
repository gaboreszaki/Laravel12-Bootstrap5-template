<?php

namespace App\View\Components\Layout\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileItems extends Component
{
    /**
     * Create a new component instance.
     */
    public object $user;
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.navbar.profile-items');
    }
}
