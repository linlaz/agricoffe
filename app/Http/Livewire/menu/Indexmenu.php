<?php

namespace App\Http\Livewire\menu;

use App\Models\Menu;
use Livewire\Component;

class Indexmenu extends Component
{
    public $form = null;
    //menu
    public $name_menu, $price_menu, $description_menu, $id_menu;
    //endmenu

    protected $listeners = [
        'success' => '$refresh',
    ];

    public function render()
    {
        $menu = Menu::paginate(5);
        return view('menu.indexmenu', [
            'menu' => $menu
        ]);
    }

    public function addmenu()
    {
        $this->form = 'on';
    }
    public function storemenu()
    {
        Menu::create([
            'name' => $this->name_menu,
            'price' => $this->price_menu,
            'description' => $this->description_menu,
        ]);
        $this->resetall();
        $this->emit('success');
    }

    public function deletemenu($id)
    {
        Menu::where('id', $id)->delete();
        $this->emit('success');
    }
    public function resetall()
    {
        $this->name_menu = null;
        $this->price_menu = null;
        $this->description_menu = null;
        $this->form = null;
        $this->id_menu = null;
    }
    public function editmenu($idmenu)
    {
        $menu = Menu::where('id', $idmenu)->first();
        $this->form = 'on';
        $this->id_menu = $menu->id;
        $this->name_menu = $menu->name;
        $this->price_menu = $menu->price;
        $this->description_menu = $menu->description;
    }
    public function updatemenu($idmenu)
    {
        $menu = Menu::where('id', $idmenu)->first();
        $menu->update([
            'name' => $this->name_menu,
            'price' => $this->price_menu,
            'description' => $this->description_menu,
        ]);
        $this->resetall();
        $this->emit('success');
    }
}
