<?php

namespace App\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $products;

    public function mount($products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.products');
    }

}
