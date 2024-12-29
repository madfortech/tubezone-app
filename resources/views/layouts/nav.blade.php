 <!-- Start: Navbar With Button -->
 <nav class="navbar navbar-expand-md fixed-top bg-body py-3">
    <div class="container">
        
        <a class="navbar-brand d-flex align-items-center" href="{{('/')}}">
            <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-video-fill">
                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z"></path>
                </svg>
            </span>
            <span>   {{ config('app.name', 'letsplays') }}</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler border-0 rounded-0" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto mt-4">
              {{-- Left link here --}}
            </ul>

                <!-- Search form here -->
                <livewire:search.search />

                <ul class="navbar-nav ms-auto">

                    {{--  Setting--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-three-dots-vertical">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
                            </svg>&nbsp;
                        </a>
                        <div class="dropdown-menu shadow-sm">
                            <a class="dropdown-item" href="{{route('user.setting.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>{{('Settings')}}
                            </a>
                        </div>
                    </li>
                    {{--  Setting--}}
                    
                @auth
                    @if (Route::has('login'))
                        {{--  Bell --}}
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell-slash-fill">
                                    <path d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73M10 15a2 2 0 1 1-4 0zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75z"></path>
                                </svg>&nbsp;
                            </a>
                            <div class="dropdown-menu shadow-sm">
                                <a class="dropdown-item" href="#">First Item</a>
                                <a class="dropdown-item" href="#">Second Item</a>
                                <a class="dropdown-item" href="#">Third Item</a>
                            </div>
                        </li> -->
                        {{--  Bell --}}

                        {{-- Video --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-reels-fill">
                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6"></path>
                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"></path>
                                </svg>&nbsp;
                            </a>
                            <div class="dropdown-menu shadow-sm">
                                <a class="dropdown-item" href="{{route('posts.create')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-video-fill">
                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z"></path>
                                    </svg>&nbsp;Upload video
                                </a>
                           
 
                            </div>
                        </li>
                        {{-- Video --}}

                       
                    @endif
                    @else


                    <a class="btn btn-link rounded-pill border text-decoration-none" href="{{url('login')}}">
                        {{('Sign in')}}
                    </a>
                @endauth
                   
                </ul>
                <!-- <span class="navbar-text bg-danger text-light px-2 rounded fw-semibold">
                    Navbar text with an inline element
                </span> -->
        </div>
    </div>
</nav><!-- End: Navbar With Button -->