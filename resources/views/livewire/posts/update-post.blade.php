<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @if (session('status'))
    <div class="p-3 bg-success text-white">
        {{ session('status') }}
    </div>
    @endif

    <form wire:submit="save"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{('Title')}}</label>
            <input type="text" class="form-control" wire:model.defer="title" 
            value="{{ $title }}"   
            aria-describedby="title">
            <div class="text-danger">@error('title') {{ $message }} @enderror</div>
        </div>
        <!-- title -->

        <div class="mb-3">
            <label for="description" class="form-label">{{('Description')}}</label>
            <textarea class="form-control border border-2" wire:model="description"  cols="30" rows="4">
                {{ $description }}
            </textarea>
            <div class="text-danger">@error('description') {{ $message }} @enderror</div>
        </div>
        <!-- description -->

        <div class="mb-3">
            <label for="videos" class="form-label">{{('Videos')}}</label>
            <input type="file" class="form-control" wire:model.defer="video"     aria-describedby="videos">
            <div class="text-danger">@error('video') {{ $message }} @enderror</div>
        </div>
        <!-- videos -->

        <!-- categories -->
        <div class="mb-3">
            <label for="category_id" class="form-label">{{('Category')}}</label>
           
            <select class="form-select border-2" wire:model.defer="category_id"   
                aria-label="category_id">
               
                <option selected>{{('Select')}}</option>
                @foreach($categories as $category)
                   
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            
            <div class="text-danger">@error('category_id') {{ $message }} @enderror</div>
        </div>
        <!-- categories -->
         
        <div class="mb-3">
            <label for="audience" class="form-label">{{('Audience')}}</label>
            <select class="form-select border-2" wire:model.defer="audience"   aria-label="audience">
                <option selected>{{('Select')}}</option>
                @foreach($audienceOptions as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
           
            <div class="text-danger">@error('audience') {{ $message }} @enderror</div>
        </div>
        <!--  audience -->

        <div class="mb-3">
            <label for="tags" class="form-label">{{('Tags')}}</label>
            <input type="text" class="form-control" wire:model.defer="tags"   
            aria-describedby="tags"
            value="{{ old('tags', $tags) }}">
        </div>
        <!-- tags -->
         
        <div class="mt-3">
            <button type="submit" class="btn btn-primary rounded-pill">
                {{('update')}}
            </button>
        </div>
    </form>
</div>
