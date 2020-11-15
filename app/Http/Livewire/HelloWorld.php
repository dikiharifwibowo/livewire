<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $params;
    public $name;
    public function mount($params)
    {
        $this->name = $params;
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <h2>My Name is : {{ $this->name }}</h2>
            </div>
        blade;
    }
}
