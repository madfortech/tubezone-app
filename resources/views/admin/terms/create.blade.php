@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('Add new terms')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('Add new terms conditions')}}</p>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="py-2">
                        <div>
                            <div class="row">
                                
                                {{-- Start Form --}}
                                <form method="POST" action="{{route('admin.terms.store')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="terms">
                                                    <strong>{{('terms')}}</strong>
                                                </label>
                                                
                                                <textarea name="terms"
                                                    id="terms" 
                                                    placeholder="write terms description"
                                                    class="form-control border border-2 @error('terms') is-invalid @enderror"
                                                    cols="30" rows="4">
                                                     
                                                </textarea>
                                                @error('terms')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Description--}}

                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            {{('Save')}}
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
