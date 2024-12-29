@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('privacy')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('privacy Info')}}</p>
          
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    @if(auth()->user()->hasRole('writer|admin'))
                        <a class="btn btn-primary rounded-0" href="{{route('admin.privacy.create')}}" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>
                            {{ ( 'add new') }}
                        </a>
                    @endif
                </div>
                <div class="col-md-6">
                    <!-- <div class="text-md-end" id="dataTable_filter">
                        <label class="form-label">
                            <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
                        </label>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 mb-4 text-nowrap">
                    <div class="py-2">
                        <div>
                            
                            <div class="row">
                                <div class="table-responsive mt-2 overflow-x-scroll">
                                    <table class="table my-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">  {{ 'id' }}</th>
                                                <th scope="col"> {{ 'privacy' }}</th>
                                               
                                                <th scope="col"> {{ 'created_at' }}</th>
                                                <th scope="col"> {{ 'updated_at' }}</th>
                                                <th scope="col"> {{ 'edit' }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($privacyData as $key => $data)
                                                <tr>
                                                    <td>    {{ $data->id ?? '' }}</td>
                                                    <td>    {{ $data->privacy ?? '' }}</td>
                                               
                                                    <td>    {{ $data->created_at ?? '' }}</td>
                                                    <td>    {{ $data->updated_at ?? '' }}</td>
                                                    <td>
                                                        <a class="nav-link" href="{{route('admin.privacy.edit',$data->id)}}">
                                                            <span>{{('edit')}}</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- Pagination --}}
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-start">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                            {{-- Pagination --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
