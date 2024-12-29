@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Two auth code') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.verify.store') }}">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="two_factor_code" class="col-md-4 col-form-label text-md-end">{{ __('twofactor code') }}</label>

                            <div class="col-md-6">
                                <input id="two_factor_code" type="text" 
                                    class="form-control @error('two_factor_code') is-invalid @enderror" 
                                    name="two_factor_code" required  autofocus>

                                @error('two_factor_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ new Illuminate\Support\HtmlString(__("Received an email with a login code? If not, click 
                                    <a class=\"hover:underline\" href=\":url\">
                                        here
                                    </a>.", 
                                    ['url' => route('profile.verify.resend')])) 
                                }}
                            </div>
                        </div>
                                 


                    
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
