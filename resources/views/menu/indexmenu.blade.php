<div class="p-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <button type="button" wire:click="addmenu" class="btn btn-primary"> + Create new menu</button>
    @if ($form == 'on')
        @if ($id_menu != null)
            <form wire:submit.prevent="updatemenu({{ $id_menu }})">
            @else
                <form wire:submit.prevent="storemenu">
        @endif

        <div class="mb-3">
            <label for="name_menu" class="form-label">name menu</label>
            <input type="text" class="form-control" id="name_menu" wire:model="name_menu">
        </div>
        <div class="mb-3">
            <label for="price_menu" class="form-label">price menu</label>
            <input type="text" class="form-control" id="price_menu" wire:model="price_menu">
        </div>
        <div class="mb-3">
            <label for="description_menu" class="form-label">description menu</label>
            <input type="text" class="form-control" id="description_menu" wire:model="description_menu">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger">cancel</button>
        </form>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name menu</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <button type="button" wire:click="editmenu('{{ $item->id }}')"
                            class="btn btn-warning">edit</button>
                        <button type="button" wire:click="deletemenu('{{ $item->id }}')"
                            class="btn btn-danger">delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
