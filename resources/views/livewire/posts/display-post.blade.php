<div>
            {{-- If your happiness depends on money, you will never be happy with yourself. --}}
            
            @forelse ($posts as $item)
              

                    <div class="d-lg-flex mt-2 p-2 border rounded py-5">
                        <div class="p-2">
                            
                        @if($item->hasMedia('videos'))
                           
                            <video id="player" 
                                playsinline 
                                controls 
                                class="object-fit-contain w-100" 
                                poster="{{ $item->getFirstMediaUrl('videos', 'preview') }}">
                                    <source  src="{{ $item->getFirstMediaUrl('videos') }}" 
                                type="video/webm" />
                            </video>
                        @endif
                               
                        </div>

                        <div class="p-2 flex-grow-1">
                            <h1 class="fw-bold"> 
                                <a href="{{ route('post.show', ['post' => $item->id]) }}" class="text-decoration-none"> 
                                    {{ $item->title }}
                                </a>
                            </h1>
                            <code class="text-muted">
                                {{ $item->views }} {{ Str::plural('view', $item->views) }}
                            </code>
                            <code class="text-muted ms-1">{{ $item->created_at->diffForHumans() }}</code>
                            <p class="fs-5 font-monospace">   {{ $item->description }}</p>
                            <span>
                            @auth
                                @if(Auth::id() == $item->user->id)
                                    @if(Auth::user()->getMedia('avatars')->first())
                                        <img class="img-fluid rounded-circle" 
                                            alt="alt" 
                                            src="{{ Auth::user()->getFirstMediaUrl('avatars') }}" 
                                            width="30" 
                                            height="30">
                                    @endif
                                    <p class="badge text-bg-secondary rounded-pill">  {{ $item->user->name }}</p>
                                @else
                                <p class="badge text-bg-secondary rounded-pill">  {{ $item->user->name }}</p>
                                @endif
                            @endauth

                            @guest
                                <p class="badge text-bg-secondary rounded-pill">  {{ $item->user->name }}</p>
                            @endguest
                            </span>
                        </div>
                        <!-- ban model -->
                        <div class="p-2 flex-grow-0">
                            @auth  
                                @if(Auth::id() != $item->user->id) 
                                    <svg  data-bs-toggle="modal" data-bs-target="#exampleModal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                                        <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z"/>
                                    </svg>
                                @endif
                            @endauth
                          
                            @include('pop-up.posts-reports.show')
                        </div>
                    </div>
                 
                @empty
                <p>{{ __('No posts found.') }}</p>
            @endforelse
</div>
