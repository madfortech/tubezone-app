@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-2">
                <div class="p-5 rounded-5 mt-5 bg-light">
                    <div class="d-md-flex">
                        <div class="flex-shrink-0">
                            <img class="img-fluid rounded-circle" alt="a drawing of a yellow and black object" 
                                src="{{asset('/img/photo-1705075887479-1da2632df6cb.jpg')}}" width="100">
                            <h5>{{('reset password')}}</h5>
                        </div>
                        <div class="flex-shrink-1 ms-2 w-100">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="row gx-0 mb-2">
                                    <div class="col-lg-12">
                                        <input 
                                            class="form-control form-control-sm @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}"  
                                            type="email" 
                                            placeholder="mail@example.com" 
                                            name="email" required=""
                                            autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                      
                                    </div>
                                </div>
                                {{-- Email  --}}

                            
                                <div class="row gx-0 mb-2">
                                    <div class="col d-grid">
                                        <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="p-1 d-flex justify-content-end mt-2">
                    <div>
                        <a class="text-decoration-none mx-2" href="{{route('terms')}}">
                        Terms
                        </a>
                        <a class="text-decoration-none" href="{{route('privacy')}}">Privacy</a>
                        <a class="text-decoration-none mx-1" href=" {{route('display-article')}}">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
