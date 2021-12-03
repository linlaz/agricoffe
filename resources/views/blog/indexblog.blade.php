<div>
    {{-- Care about people's approval and you will be their prisoner. --}}



    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('createblog') }}" class='btn btn-primary my-2'>
            + create blog
        </a>
        @foreach ($blogs as $item)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-2 p-3">
                <h1>{{ $item->title }}</h1>
                {!! Str::limit(strip_tags($item->text), 200, '...') !!}
                <div>
                        @if ($item->publish){{ 'publish' }}@else{{ 'draft' }}@endif.last
                        update {{ $item->updated_at }} | {{ $item->category->name }}
                </div>
                <div class="card-footer text-muted">
                    @if ($item->publish)
                        <i wire:click="actionp('publish','0','{{ $item->id }}')" type="button"
                            class="btn btn-primary m-2 ri-draft-fill" title="unpublish your blog"></i>
                    @else
                        <i wire:click="actionp('publish','1','{{ $item->id }}')" type="button"
                            class="btn btn-primary m-2 ri-send-plane-fill" title="publih your blog"></i>

                    @endif
                    <a href="/blogs/{{ $item->slug }}/edit" type="button" class="btn btn-success ri-edit-box-line"
                        title="edit your blog"></a>
                    <i onclick="confirm('Are you sure you want to delete this blog ?') || event.stopImmediatePropagation()"
                        wire:click="actionp('delete','1','{{ $item->id }}')" type="button"
                        class="btn btn-danger m-2 ri-delete-bin-5-fill" title="delete your blog"></i>
                </div>
            </div>
        @endforeach
    </div>
</div>
