<div>
    {{-- Do your work, then step back. --}}
                                @if (session('status'))
                                    <div class="alert alert-success bg-success p-2 text-white">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form
                                    method="POST" wire:submit="save"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="title">
                                                    <strong>{{('Title')}}</strong>
                                                </label>
                                                <input 
                                                    class="form-control  @error('title') is-invalid @enderror" 
                                                    type="text"
                                                    name="title" 
                                                    id="title" 
                                                    wire:model.defer="title"
                                                    value="{{ $title }}"> 
                                                
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- title --}}


                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="title">
                                                    <strong>{{('Description')}}</strong>
                                                </label>
                                                
                                                <textarea name="description"
                                                    id="description" 
                                                    placeholder="write article description"
                                                    class="form-control border border-2 @error('description') is-invalid @enderror"
                                                    cols="30" rows="4"
                                                    wire:model.defer="description">
                                                    {{ $description }}
                                                </textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Description--}}

                          
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            {{('update')}}
                                        </button>
                                    </div>
                                </form>
                                {{-- End Form --}}
</div>
