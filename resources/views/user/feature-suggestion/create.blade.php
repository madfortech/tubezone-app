@extends('layouts.app')

@section('content')

@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-md-3">
               
            @include('frontend.side-nav')    
            <!--End Side Nav Comment-->
 
            {{-- Display article --}}
            <div class="col-md-6 col-lg-8 offset-md-5 offset-lg-4 p-2">
                
                <div class="mb-5">
                    <h4 class="text-capitalize">{{('need feature or any suggestion')}}</h4>
                </div>

                <livewire:feature-suggestion.create/>
            </div>
            {{-- End Display article --}}
        </div>
    </div>
</section>

@endsection