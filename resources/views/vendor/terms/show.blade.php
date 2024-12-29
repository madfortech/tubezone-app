@extends('layouts.app')

@section('content')

@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-lg-6">
          
        
            <div class="col-md-6 col-lg-8 offset-md-5 offset-lg-4 p-2">
                <h2>Please agree to our updated Terms of Service.</h2>
                <div id="terms py-5">
                    {!! $terms->terms !!}
                </div>

                <form action="{{ route('terms.store') }}" method="post" class="mt-5">
                    @csrf

                    <div class="row gx-0 mb-2">
                        <div class="col-lg-12">
                            <input name="terms" type="checkbox" class="form-check-input" id="terms_and_conditions" required>
                            <label class="form-check-label" for="terms_and_conditions">{{ __('terms::terms.label') }}</label>
                            @error('terms')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="row gx-0 mb-2">
                        <div class="col d-grid ">
                            <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                                {{('accept & continue ')}}
                            </button>
                        </div>
                    </div>
 
                </form>
            </div>
             
        </div>
    </div>
</section>

@endsection