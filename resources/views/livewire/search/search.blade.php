<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
            <form  method="GET" wire:submit.prevent="search">
                @csrf 
                <div class="row row-cols-lg-auto g-3">
                    <div class="col-12">
                        <div class="input-group">
                            <input class="form-control form-control-sm" 
                                type="search" id="inlineFormInputGroupSearch" required="" 
                                name="search" 
                                wire:model="searchQuery"
                                placeholder="Search">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            
        @if(isset($results))
            @foreach($results as $result)
                <ul class="list-group mt-5">
                    <li class="list-group-item">
                        <a class="text-decoration-none" href="{{ route('search.result', $result->id) }}">{{ $result->title }}</a>
                        <a class="text-decoration-none"  href="{{ route('search.result', $result->id) }}">{{ $result->username }}</a>
                        <a class="text-decoration-none"  href="{{ route('search.result', $result->id) }}">{{ $result->name }}</a>
                    </li>
                </ul>
            @endforeach
        @endif

 
</div>
