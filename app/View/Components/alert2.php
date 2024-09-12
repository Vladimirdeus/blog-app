<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    public $class;
    public function __construct($type)
    {
        switch ($type) {
            case 'success':
                $class = "success";
                break;
            case 'danger':
                $class = "danger";
                break;
            
            default:
                $class = "primary";
                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
