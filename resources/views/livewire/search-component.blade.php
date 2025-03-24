<div class="w-50 m-auto mt-5">

    <div class="form-control m-1">
        <input type="text" class="form-control" wire:model.live="search">
    </div>

    @if(count($posts) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
