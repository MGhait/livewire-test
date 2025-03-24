<div class="w-50 m-auto mt-5">
{{--    <button class="form-control w-25" wire:click="submit">Submit</button>--}}
{{--    <div class="spinner-border text-danger" role="status" wire:loading>--}}
{{--        <span class="visually-hidden">Loading...</span>--}}
{{--    </div>--}}
{{--    <small class=" text-primary" wire:loading.delay.lognest>--}}
{{--        Loading ...--}}
{{--    </small>--}}
{{--    <small class=" text-primary" wire:loading.remove>--}}
{{--        FUCK YOU !! *_*--}}
{{--    </small>--}}

    <label class="text-red-600 mb-5">Chose One</label>
    <button class="form-control w-25" wire:click="submit1">Submit1</button>
    <div class="spinner-border text-danger" role="status" wire:loading wire:target="submit1">
        <span class="visually-hidden">Loading...</span>
    </div>
    <button class="btn-danger w-25 mt-5" wire:click="submit2" wire:loading.class="btn-danger">Submit2</button>
    <small class=" text-primary" wire:loading wire:target="submit2">
        FUCK YOU !! *_*
    </small>
</div>
