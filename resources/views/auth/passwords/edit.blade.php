@extends('layouts.app')

@section('content')
@include('layouts.nav')

<section class="py-5 mt-5">
    <div class="container-fluid">
        <div class="row gx-3">
            <div class="col-md-3">
               
            @include('frontend.side-nav')    
            <!--End Side Nav Comment-->

            <div class="col-md-5 offset-md-2 offset-lg-1 p-2 mt-5 border-top border-bottom">
                <div class="mb-5">
                    <h4 class="text-capitalize">{{('Password change')}}</h4>
                </div>
                <div class="mb-3">

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    {{-- Form --}}
                    <form method="POST" action="{{ route('profile.password.update') }}">
                        @csrf
                       
                        <div class="row gx-0 mb-2">
                            <div class="col-lg-12">
                                <input 
                                    class="form-control form-control-sm @error('password') is-invalid @enderror"
                                    type="password" 
                                    id="password" 
                                    placeholder="password"
                                    autocomplete="current-password" 
                                    name="password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   
                            </div>
                        </div>
                        {{-- password  --}}

                        <div class="row gx-0 mb-2">
                            <div class="col-lg-12">
                                <input 
                                    class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror"
                                    type="password" 
                                    id="password_confirmation" 
                                    placeholder="confirm password"
                                    name="password_confirmation">
                            </div>
                        </div>
                        {{-- confirm password  --}}

                      
                    
                        <div class="row gx-0 mb-2">
                            <div class="col d-grid ">
                                <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                                    {{('Update')}}
                                </button>
                            </div>
                        </div>

                        
                    </form>
                    {{-- End Form --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
