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
                <div class="mb-5">
                    <h4 class="text-capitalize">{{('channel content')}}</h4>
                </div>
                <div class="mb-3 d-md-flex">
                    <div class="mb-2 flex-grow-1">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">
                                        {{('Videos')}}
                                    </a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">
                                        {{('Shorts')}}
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">
                                        {{('Live')}}
                                    </a>
                                </li> -->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" role="modal"  data-bs-toggle="modal" data-bs-target="#editCustomizationModal" href="#tab-4">
                                        {{('Customization')}}
                                    </a>
                                </li>
                                @include('pop-up.profile.customization')
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    @include('frontend.videos')    
                                </div>
                                <!-- <div class="tab-pane" role="tabpanel" id="tab-2">
                                    @include('frontend.shorts')    
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-3">
                                    @include('frontend.live') 
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
