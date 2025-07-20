@php $pageName = "dashboard"; $subpageName = ""; @endphp

@extends('layouts.userapp')


@section('content')

<div class="page-header">
  <div class="page-title">
      <h3>Helpdesk Dashboard</h3>
      <div>
          <div   class="btn btn-outline-light">
              <i data-feather="calendar"></i>
              <span> &nbsp;&nbsp; {{ now()->format('F j, Y, g:i a') }}  </span>
          </div>
          
          
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-12">
      <div class="card">
          <div class="card-body">
              <h6 class="card-title">Time to Resolved Complaint</h6>
              <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 position-relative mr-3 text-center">
                      <div id="circle-1" class="circle"></div>
                      <div class="position-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                          <h4 class="mb-0">65%</h4>
                          <span class="font-size-11 text-uppercase text-muted">Reached</span>
                      </div>
                  </div>
                  <div>
                      <p class="text-muted mb-1">The average time taken to resolve complaints.</p>
                      <h2 class="mb-0">7m:32s
                          <small>/ Goal: 8m:0s</small>
                      </h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-6 col-md-12">
      <div class="card">
          <div class="card-body">
              <h6 class="card-title">Average Speed of Answer</h6>
              <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 position-relative mr-3 text-center">
                      <div id="circle-2" class="circle"></div>
                      <div class="position-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                          <h4 class="mb-0">35%</h4>
                          <span class="font-size-11 text-uppercase text-muted">Reached</span>
                      </div>
                  </div>
                  <div>
                      <p class="text-muted mb-1">Measure how quickly support staff answer incoming calls.</p>
                      <h2 class="mb-0">0m:20s
                          <small>/ Goal: 0m:10s</small>
                      </h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
       
        <a href="#">
            <div class="card border-0 bg-success"> 
                <div class="card-body">
                    <h1 ></i>Click to submit Application <i data-feather="arrow-right" style="width: 72px; height: 32px;"></i></h1>
                </div>
            </div>
        </a>
              
  </div>
</div>

 
@endsection

@section('scripts')
    
@endsection