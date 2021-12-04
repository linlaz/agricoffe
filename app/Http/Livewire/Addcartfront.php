<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Addcartfront extends Component
{
    public function render()
    {
        $menu = Menu::limit(7)->get();
        return view('indexpage.addcartfront',[
            'menu' =>$menu
        ]);
    }
    public function addcart($idmenu)
    {
        $findcart = Cart::where('menu_id', $idmenu)->where('user_id', Auth::user()->id)->where('checkout', '0')->first();
        if (is_null($findcart)) {
            Cart::create([
                'menu_id' => $idmenu,
                'user_id' => Auth::user()->id,
                'checkout' => '0',
                'quantity' => 1,
            ]);
        } else {
            $findcart->update([
                'quantity' => $findcart->quantity + 1
            ]);
        }
    }
}
