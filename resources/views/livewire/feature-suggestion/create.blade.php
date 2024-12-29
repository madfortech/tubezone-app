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
            <label for="name" class="form-label">{{('feature name')}}</label>
            <input type="text" class="form-control" wire:model.defer="name"   
                aria-describedby="name">
            <div class="text-danger">@error('name') {{ $message }} @enderror</div>
        </div>
        <!-- name -->

        <div class="mb-3">
            <label for="description" class="form-label">{{('why you need this feature ?')}}</label>
            <textarea class="form-control border border-2" wire:model="description"    cols="30" rows="4"></textarea>
            <div class="text-danger">@error('description') {{ $message }} @enderror</div>
        </div>
        <!-- description -->
        
        <div class="mt-3">
            <button type="submit" class="btn btn-primary rounded-pill">
                {{('Send')}}
            </button>
        </div>
    </form>
</div>
