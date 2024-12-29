@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('report')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('add report Info')}}</p>
            
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <!-- Download  -->
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
                                                <th scope="col">  {{ ('id') }}</th>
                                                <th scope="col">  {{ ('bannable claim') }}</th>
                                                <th scope="col">  {{ ('created_by') }}</th>
                                                <th scope="col">  {{ ('comment') }}</th>
                                                <th scope="col">  {{ ('expired_at') }}</th>
                                                <th scope="col">  {{ ('created_at') }}</th>
                                                <th scope="col">  {{ ('updated_at') }}</th>
                                                <th scope="col">  {{ ('updated_at') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reports as $key => $data)
                                            <tr data-entry-id="{{ $data->id }}">
                                                <td>    {{ $data->id ?? '' }}</td>
                                                <td>   
                                                    <a class="text-decoration-none" href="{{ route('post.show', $data->bannable->id) }}">
                                                        {{ $data->bannable->title ?? '' }}
                                                    </a>
                                                </td>

                                                <td>   {{ $data->createdBy->name ?? '' }}</td>
                                                <td>   {{ $data->comment ?? ''}}</td>
                                                <td>   {{ $data->expired_at ?? ''}}</td>
                                                <td>   {{ $data->updated_at ?? ''}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- Pagination --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- <nav class="d-lg-flex justify-content-lg-start">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav> -->
                                </div>
                            </div>
                            {{-- Pagination --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
