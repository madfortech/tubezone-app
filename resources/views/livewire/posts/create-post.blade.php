@if (session('status'))
<div class="alert alert-success p-3 bg-green-800 text-white">
    {{ session('status') }}
</div>
@endif

<form wire:submit="save"  enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">{{('Title')}}</label>
        <input type="text" class="form-control" wire:model="title"    aria-describedby="title">
        <div>@error('title') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">{{('Description')}}</label>
        <textarea class="form-control border border-2" wire:model="description"    cols="30" rows="4"></textarea>
        <div>@error('description') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="videos" class="form-label">{{('Videos')}}</label>
        <input type="file" class="form-control" wire:model="video"     aria-describedby="videos">
        <div>@error('videos') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">{{('Category')}}</label>
        <select class="form-select border-2" wire:model="category_id"   aria-label="category_id">
            <option selected>{{('Select')}}</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div>@error('category_id') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="visibility" class="form-label">{{('Visibility')}}</label>
        <select class="form-select border-2" wire:model="visibility"    aria-label="visibility">
            <option selected>{{('Select')}}</option>
            @foreach($visibilityOptions as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
        <div>@error('visibility') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="audience" class="form-label">{{('Audience')}}</label>
        <select class="form-select border-2" wire:model="audience"   aria-label="audience">
            <option selected>{{('Select')}}</option>
            @foreach($audienceOptions as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
        <div>@error('audience') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="tags" class="form-label">{{('Tags')}}</label>
        <input type="text" class="form-control" wire:model="tags"   aria-describedby="tags">
        
    <div class="mt-3">
        <button type="submit" class="btn btn-primary rounded-pill">
            {{('Publish')}}
        </button>
    </div>
</form>