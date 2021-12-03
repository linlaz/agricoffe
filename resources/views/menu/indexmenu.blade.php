<div class="p-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <button type="button" wire:click="addmenu" class="btn btn-primary"> + Create new menu</button>
    @if ($form == 'on')
        @if ($id_menu != null)
            <form wire:submit.prevent="updatemenu({{ $id_menu }})"  enctype="multipart/form-data">
            @else
                <form wire:submit.prevent="storemenu"  enctype="multipart/form-data">
        @endif

        <div class="mb-3">
            <label for="name_menu" class="form-label">name menu</label>
            <input type="text" class="form-control" id="name_menu" wire:model="name_menu">
            @error('name_menu')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price_menu" class="form-label">price menu</label>
            <input type="text" class="form-control" id="price_menu" wire:model="price_menu">
            @error('price_menu')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description_menu" class="form-label">description menu</label>
            <input type="text" class="form-control" id="description_menu" wire:model="description_menu">
            @error('description_menu')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="photo_menu" class="form-label">photo menu</label>
            <br>
             <input type="file" wire:model="photo_menu">
            @error('photo_menu')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
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
