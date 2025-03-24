<form class="w-50 m-auto mt-5" wire:submit.prevent="submit">
    <div class="mb-3">
        <label class="form-label">Upload your file</label>
        <input class="form-control form-control" type="file" wire:model="photos" multiple>
        @error('photos.*')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div>
{{--        @if($photo)--}}
{{--            Image Preview:--}}
{{--            <img src="{{ $photo->temporaryUrl() }}" width="150px">--}}
{{--        @endif--}}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
