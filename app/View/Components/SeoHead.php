<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeoHead extends Component
{
    public $title;
    public $description;
    public $image;

    public function __construct(
        $title = null,
        $description = null,
        $image = null
    ) {
        $this->title       = $title;
        $this->description = $description;
        $this->image       = $image;
    }

    public function render(): View | Closure | string
    {
        return view('components.seo-head');
    }
}
