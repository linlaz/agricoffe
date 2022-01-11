{{-- Nothing in the world is as soft and yielding as water. --}}



<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if ($formorder == 'on')
            <table class="table my-4 mx-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">name menu</th>
                        <th scope="col">quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartdetail as $item)
                        <tr>
                            <td>{{ $item->menu->name }}</td>
                            <td>{{ $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <table class="table mx-3">
            <thead>
                <tr>
                    <th scope="col">ID ORDER</th>
                    <th scope="col">total price</th>
                    <th scope="col">order by</th>
                    <th scope="col">alamat</th>
                    <th scope="col">type order</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->address }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <button type="button" wire:click="detail('{{ $item->id }}')"
                                class="btn btn-success">detail</button>
                            @if ($item->acc == '0')
                                <button type="button" wire:click="accorder('{{ $item->id }}')"
                                    class="btn btn-primary">belum selesai</button>
                            @else
                                <button type="button"
                                    class="btn btn-danger">sudah selesai</button>
                            @endif

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
