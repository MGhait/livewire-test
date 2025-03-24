<div class="w-50 m-auto mt-5">
    <button class="btn btn-primary" wire:click.prefetch="fetch">Fetch</button>
{{--    prefetch dosn't work in livewire 3--}}
    @if($name)
        <div class="alert alert-success">{{ $name }}</div>
    @endif
</div>
