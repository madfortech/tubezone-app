@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">{{('Feature suggestion')}}</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">{{('Feature suggestion request')}}</p>
            
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    
                </div>
                <!-- <div class="col-md-6">
                    <div class="text-md-end" id="dataTable_filter">
                        <label class="form-label">
                            <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
                        </label>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-xs-6 mb-4 text-nowrap">
                    <div class="py-2">
                        <div>
                            
                            <div class="row">
                                <livewire:feature-suggestion.list-suggestion/>
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
