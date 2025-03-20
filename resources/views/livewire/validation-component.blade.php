<form class="w-50 m-auto mt-5" wire:submit.prevent="submit">
{{--    it works for me with prevent and without it tho ^_^ [wire:submit="submit"] --}}
{{--    @dump($errors)--}}
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" wire:model="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" wire:model="password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" wire:model="remember">
        @error('remember')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <label class="form-check-label" for="exampleCheck1">Remember</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

