<?php

namespace App\View\Components\Parts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Toast extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $sessionMsg = session('status');
        if ($sessionMsg == 'verification-link-sent' ){
            session('status', 'A new email verification link has been emailed to you!');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.parts.toast');
    }
}

