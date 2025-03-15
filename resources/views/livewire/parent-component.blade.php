<div>
    {{ $parentTitle }}
{{--    to prevent any unexpected behaviour you should use the key in the looop--}}
    @foreach($childrenNames as $key => $name)
        @livewire('child-component',['title' => $name], key($key))
{{--        or you can use it in this form --}}
        <livewire:child-component title="{{ $name }}" wire:key="{{ $key }}">
    @endforeach
</div>
