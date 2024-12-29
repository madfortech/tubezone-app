@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('all article')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('all article ')}}</p>
            
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    @if(auth()->user()->hasRole('writer'))
                        <a class="btn btn-primary rounded-0" href="{{route('writer.article-create')}}" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                            {{ ('add new') }}
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
                                    <livewire:article.list-article>
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
