<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h2>Hello World</h2>
            </div>
        blade;
    }
}
