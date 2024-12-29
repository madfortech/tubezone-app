@extends('layouts.app')

@section('content')

@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-lg-6">
          
        
            <div class="col-md-6 col-lg-8 offset-md-5 offset-lg-4 p-2">
                <h2>Please agree to our updated privacy of Service.</h2>
                @if($latestPrivacy->isNotEmpty())

                    <div id="terms py-5">

                        {!! $latestPrivacy->first()->privacy !!}

                    </div>

                    @else

                    <p>No privacy policy found.</p>

                @endif
            
            </div>
             
        </div>
    </div>
</section>

@endsection