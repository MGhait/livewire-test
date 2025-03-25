<div class="w-50 m-auto mt-5">
    <input type="text" class="form-control" wire:model.lazy="email" wire:dirty.class="text-danger">
    <span wire:dirty class="text-danger" wire:target="email">You Are Typing On Dirty State ...</span>
</div>
