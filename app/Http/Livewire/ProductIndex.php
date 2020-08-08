<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;
use App\Facades\Cart;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;
    protected $updatesQueryString=['search'];

    public function render()
    {
        return view('livewire.product-index',[
            'products'=>$this->search === null ?
            Product::paginate(12) :
            Product::where('name','like','%'.$this->search.'%')
            ->paginate(12),
        ]);
    }

    public function addToCart(int $productId)
    {
        Cart::add(Product::where('id',$productId)->first());
        $this->emit('cartAdded');
    }
}
