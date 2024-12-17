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
                            <h5>{{('register')}}</h5>
                        </div>
                        <div class="flex-shrink-1 ms-2 w-100">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
 
                                <div class="row gx-0 mb-2">
                                    <div class="col-lg-12">
                                        <input 
                                            class="form-control form-control-sm @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}"  
                                            type="text" 
                                            placeholder="username" 
                                            name="username" required=""
                                            autocomplete="username" autofocus>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         
                                    </div>
                                </div>
                                {{-- username  --}}
 

                                <div class="row gx-0 mb-2">
                                    <div class="col-lg-12">
                                        <input 
                                            class="form-control form-control-sm @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}"  
                                            type="text" 
                                            placeholder="full name" 
                                            name="name" required=""
                                            autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         
                                    </div>
                                </div>
                                {{--  Name --}}

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
                                <!-- Email -->

                             
                                <div class="row gx-0 mb-2">
                                    <div class="col-lg-12">
                                        <input 
                                            class="form-control form-control-sm @error('password') is-invalid @enderror"
                                         
                                            type="password" 
                                            placeholder="password" 
                                            name="password" required=""
                                            autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         
                                    </div>
                                </div>
                                {{-- password --}}

                                <div class="row gx-0 mb-2">
                                    <div class="col-lg-12">
                                        <input 
                                            class="form-control form-control-sm @error('password') is-invalid @enderror"
                                            id="password-confirm"
                                            type="password" 
                                            placeholder="password" 
                                            name="password_confirmation" required=""
                                            autocomplete="new-password">
                                            
                                         
                                    </div>
                                </div>
                                {{-- confirm password --}}

                                <div class="row gx-0 mb-2">
                                    <div class="col d-grid">
                                        <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                                            {{('Register')}}
                                        </button>
                                    </div>
                                </div>
                              
                            </form>

                            <div>
                                <hr class="text-muted">
                                <p class="text-center">
                                    allready have account&nbsp;
                                    <a class="text-decoration-none" href="{{url('login')}}">
                                      {{('login')}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-1 d-flex justify-content-end mt-2">
                    <div>
                        <a class="text-decoration-none mx-2" href="#">
                        Terms
                        </a>
                        <a class="text-decoration-none" href="#">Privacy</a>
                        <a class="text-decoration-none mx-1" href="#">Help</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
