@extends('layouts.app')

@section('content')

@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-md-3">
               
            @include('frontend.side-nav')    
            <!--End Side Nav Comment-->
            <!-- 
            <div class="col-md-7 offset-md-2 offset-lg-1 p-2 mt-5 border-top border-bottom">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2 flex-grow-1">
                        <h4>Shorts</h4>
                    </div>
                    <div class="p-2">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="d-md-flex">
                            {{-- Start shorts loop --}}
                            <div class="flex-shrink-0 p-2 videoContainer">
                                <video 
                                    class="rounded video" 
                                    width="200" height="315" 
                                    controls="" 
                                    muted="" 
                                    loop="" 
                                    preload="metadata">
                                </video>
                                <p>this is intro #intro #selfcontrol</p>
                                <span>200 Views</span>
                                <span class="float-end">
                                    <a class="text-decoration-none" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-circle">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                            {{--  End shorts loop --}}
                           
                        </div>
                    </div>
                </div>
            </div> -->

            {{-- Display videos --}}
            <div class="col-md-6 col-lg-8 offset-md-5 offset-lg-4 p-2">
                <livewire:posts.display-post />
            </div>
            {{-- End Display videos --}}
        </div>
    </div>
</section>

@endsection