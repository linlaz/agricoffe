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
        $this->cartdetail = null;
        $this->formorder = 'on';
        $this->cartdetail = Cart::where('order_id',$idorder)->get();
    }
    public function accorder($idorder)
    {
        $order = ModelsOrder::where('id',$idorder)->first();
        $order->update([
            'acc' => '1'
        ]);
    }
    public function render()
    {
        $order = ModelsOrder::with('user')->get();
        return view('cart.order', [
            'order' => $order
        ]);
    }
}
