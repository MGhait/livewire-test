<form class="w-50 m-auto mt-5" wire:submit.prevent="submit">
    <div class="mb-3">
        <label class="form-label">Upload your file</label>
        <input class="form-control form-control" type="file" wire:model="photo">
{{--        @error('photos.*')--}}
{{--            <span class="text-danger">{{ $message }}</span>--}}
{{--        @enderror--}}
        @error('photo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <small class="text-primary" wire:loading wire:target="photo">Uploading...</small>
{{--        can also use spinner or splash or anything to handle loading --}}
    </div>
    <div>
        @if($photo)
            Image Preview:
            <img src="{{ $photo->temporaryUrl() }}" width="150px">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
