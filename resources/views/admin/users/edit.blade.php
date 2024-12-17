@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('Add new User')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('Add user with role')}}</p>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="py-2">
                        <div>
                            <div class="row">
                              
                                {{-- Start Form --}}
                                <form method="POST" action="{{route('admin.user.update',$user->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">
                                                    <strong>{{('Username')}}</strong>
                                                </label>
                                                <input class="form-control" disabled type="text"
                                                name="username" 
                                                id="username" value="{{ $user->name }}"> 
                                             
                                            </div>
                                        </div>
                                    </div>
                                    {{-- User name --}}

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="name">
                                                    <strong>{{('Name')}}</strong>
                                                </label>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" 
                                                name="name"
                                                id="name" 
                                                value="{{ $user->name }}"> 
                                               
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{--  name --}}

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="email">
                                                    <strong>{{('Email')}}</strong>
                                                </label>
                                                <input class="form-control @error('email') is-invalid @enderror" type="email" 
                                                name="email"
                                                id="email" 
                                                value="{{ $user->email }}"> 
                                               
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Email --}}

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="role">
                                                    <strong>{{('Role')}}</strong>
                                                </label>
                                                <select class="form-select @error('roles') is-invalid @enderror" multiple name="roles[]" aria-label="Default select example">
                                                    @foreach($roles as $role)
                                                        <option value="{{ $role }}">{{ $role }}</option>
                                                    @endforeach
                                                </select>
                                                @error('roles')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Role --}}

 
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            {{('Update')}}
                                        </button>
                                    </div>
                                </form>
                                {{-- End Form --}}
                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
