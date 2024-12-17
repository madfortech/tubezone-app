@extends('layouts.app')

@section('content')

@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-md-3">
               
            @include('frontend.side-nav')    
            <!--End Side Nav Comment-->

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
            </div>

            {{-- Display videos --}}
            <div class="col-md-6 col-lg-8 offset-md-5 offset-lg-4 p-2">
                <div class="d-lg-flex mt-2 p-2">
                    <div class="p-2">
                        <img alt="a bunch of comic books laying on top of each other" 
                            class="thumbnail" 
                            src="{{asset('img/photo-1620336655052-b57986f5a26a.jpg')}}" style="height:300px;">
                        </div>
                    <div class="p-2 flex-grow-1">
                        <h1>Heading</h1>
                        <code class="text-muted">21.k Views</code>
                        <code class="text-muted ms-1">21 days</code>
                        <p>Lorem ipsum dolor sit amet, consectetur .</p>
                        <span>
                            <img class="img-fluid rounded-circle" alt="alt" 
                                src="{{asset('img/photo-1499996860823-5214fcc65f8f.jpg')}}" width="20">&nbsp;
                                growithme
                        </span>
                    </div>
                    <div class="p-2 flex-grow-0">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            {{-- End Display videos --}}
        </div>
    </div>
</section>

@endsection