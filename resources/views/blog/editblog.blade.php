<x-app-layout>
    @push('style')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/dist/trix.css">
        <script type="text/javascript" src="/dist/trix.js"></script>
        <style>
            trix-toolbar .trix-button-group--file-tools {
                display: none;
            }

            trix-toolbar .trix-button-group--block-tools {
                display: none;
            }

        </style>
    @endpush
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create blogs') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('updateblog',[$blog->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_blog" value="{{ $blog->id }}">
                    <div class="mb-3">
                        <label for="title" class="form-label">title blog</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10 ">
                            <select class="js-example-basic-single form-select" aria-label="Default select example"
                                id="category" name="name">
                                @foreach ($category as $item)
                                    <option value="{{ $item->slug }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">subject blog</label>
                        <input id="x" type="hidden" name="text" value="{{ $blog->text }}">
                        <trix-editor input="x"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @push('modals')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(".js-example-basic-single").select2({
                tags: true
            });
        </script>
    @endpush
</x-app-layout>
