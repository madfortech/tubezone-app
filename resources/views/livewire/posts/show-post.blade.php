<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
        <div class="card">
 
            <div class="card-body">
                
                @if($post->hasMedia('videos'))  
                    <video id="player" 
                        playsinline 
                        controls 
                        class="object-fit-contain w-100" 
                        poster="{{ $post->getFirstMediaUrl('videos', 'preview') }}">
                            <source  src="{{ $post->getFirstMediaUrl('videos') }}" 
                        type="video/webm" />
                    </video>
                @endif
                <h2 class="card-title fw-bolder"> {{ $post->title }}</h2>
                <p class="card-text fw-medium fs-4">    {{ $post->description }}</p>
                <p>Audience: <span class="fw-medium">{{ ucfirst($post->audience) }}</</span></p>
                <p>Views: {{ $post->views }}</p>
                 
                <p class="card-text"> Post date:  <span> {{ $post->created_at }}</span></p>

                @if (auth()->user()->can('delete-post', $this->post))  

                    <button class="btn btn-danger rounded-pill" 
                        wire:confirm.prompt="Are you sure you want to permanently delete this post? This action cannot be undone?\n\nType DELETE to confirm|DELETE"
                        wire:click="delete({{ $post->id }})">
                        {{('Delete')}}
                    </button> 
                    
                @endif    
            </div>
        </div>
</div>
