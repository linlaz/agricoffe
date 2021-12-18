<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order as ModelsOrder;
use Livewire\Component;

class Order extends Component
{
    public $formorder;
    public $cartdetail;
    public function detail($idorder)
    {
        $this->formorder = 'on';
        $this->cartdetail = Cart::where('order_id',$idorder)->get();
    }

    public function render()
    {
        $order = ModelsOrder::with('user')->get();
        return view('cart.order', [
            'order' => $order
        ]);
    }
}
