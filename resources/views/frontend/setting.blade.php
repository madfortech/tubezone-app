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
                    <h4 class="text-capitalize">{{('settings')}}</h4>
                </div>
                <div class="mb-3 d-md-flex">
                    <div class="list-group">
                        <a href="{{route('profile.password.edit')}}" class="list-group-item list-group-item-action mb-2">
                            {{('Password change')}}
                        </a>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
