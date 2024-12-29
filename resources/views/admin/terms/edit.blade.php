@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('update new terms')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('update terms conditions')}}</p>
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
                                <form method="POST" action="{{ route('admin.terms.update', $termData->id) }}" enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="terms">
                                                    <strong>{{('terms')}}</strong>
                                                </label>
                                                
                                                <textarea name="terms"
                                                    id="terms" 
                                                    class="form-control border border-2"
                                                    cols="30" rows="4">
                                                    {{ old('terms', $termData->terms) }}
                                                </textarea>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Description--}}

                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            {{('update')}}
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
