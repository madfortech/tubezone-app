@extends('layouts.app')

@section('content')

@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-md-3">
               
            @include('frontend.side-nav')    
            <!--End Side Nav Comment-->

        
            {{-- Display videos --}}
            <div class="col-md-6 col-lg-8 offset-md-5 offset-lg-4 p-2">
            @if(isset($userDetails))
                @foreach($userDetails as $user)
                    <div class="d-lg-flex mt-2 p-2 border rounded py-5">
                        <div class="p-2 flex-grow-1">
                            <h1> 
                                <a class="text-decoration-none"> 
                                    {{ $user['username'] }}
                                </a>
                            </h1>
                            <p class="fs-4">   {{ $user['email'] }}</p>
                        </div>
                    </div>
                    @if(isset($user['posts']))
                        @foreach($user['posts'] as $post)
                            <div class="d-lg-flex mt-2 p-2 border rounded py-5">
                                <div class="p-2">
                                    <p>{{ $post->title }}</p>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            @endif
                @if(isset($users))
                    @foreach($users as $item)
                        <div class="d-lg-flex mt-2 p-2 border rounded py-5">
                            <div class="p-2 flex-grow-1">
                                <h1> 
                                    <a class="text-decoration-none"> 
                                        {{ $item->username }}
                                    </a>
                                </h1>
                                <p class="fs-4">   {{ $item->email }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(isset($articles))
                    @foreach($articles as $item)
                        <div class="d-lg-flex mt-2 p-2 border rounded py-5">
                            <div class="p-2 flex-grow-1">
                                <h1> 
                                    <a class="text-decoration-none"> 
                                        {{ $item->title }}
                                    </a>
                                </h1>
                                <p class="fs-4">   {{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(isset($tags))
                    @foreach($tags as $item)
                        <div class="d-lg-flex mt-2 p-2 border rounded py-5">
                            <div class="p-2 flex-grow-1">
                                <h1> 
                                    <a class="text-decoration-none"> 
                                        {{ $item->name}}
                                    </a>
                                </h1>
                            </div>
                        </div>
                    @endforeach
                @endif  
            </div>     
        </div>     
    </div>                
</section>