<?php

namespace App\Http\Livewire\cart;

use App\Models\Cart as ModelsCart;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{
    public $cart;
    public function render()
    {
        $this->cart = ModelsCart::where('user_id', Auth::user()->id)->where('checkout', '0')->get();
        return view('cart.cart',[
            'cart' => $this->cart
        ]);
    }
    public function removecart($idcart)
    {
        ModelsCart::where('id',$idcart)->delete();
    }

    public function checkoutcart()
    {
        $order = Order::create([
            'user_id' => Auth::user()->id
        ]);
        $i = 0;
        while($i < $this->cart->count()){
            $find = ModelsCart::where('id',$this->cart[$i]->id)->first();
            $find->update([
                'order_id' => $order->id,
                'checkout' => '1'
            ]);
            $i++;
        }

        return redirect('/reviews');
        
    }
    public function plusone($idcart)
    {
        $find = ModelsCart::where('id', $idcart)->first();
        $find->update([
            'quantity' => $find->quantity+1
        ]);
    }
    public function minone($idcart)
    {
        $find = ModelsCart::where('id', $idcart)->first();
        $find->update([
            'quantity' => $find->quantity - 1
        ]);
    }
}
