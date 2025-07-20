@php 

$pageName = "settings"; 

$subpageName = "add_district";

@endphp
@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Breadcrumb start -->
    <div class="row m-1">
        <div class="col-12 ">
            <h4 class="main-title">Settings </h4>
            <ul class="app-line-breadcrumbs mb-3">
                <li class="">
                    <a class="f-s-14 f-w-500" href="#">
                    <span>
                        <i class="fa fa-home"></i> Dashboard 
                    </span>
                    </a>
                </li>
                <li class="">
                    <a class="f-s-14 f-w-500" href="#">
                    <span>
                        <i class="fa fa-cog"></i> Settings 
                    </span>
                    </a>
                </li>
                <li class="active">
                    <a class="f-s-14 f-w-500" href="#">Add District</a>
                </li>
            </ul>
        </div>
    </div>
    @if (session('message_success'))
    <div class="alert alert-label alert-label-success justify-content-between shopping-alert"
    role="alert">
            <p class="mb-0">
                <i class="ti ti-check label-icon label-icon-success"></i>
                {{session('message_success')}}
            </p>
    
    </div>
    
    @endif
    @if (session('message_error'))
    <div class="alert alert-label alert-label-danger justify-content-between shopping-alert"
    role="alert">
            <p class="mb-0">
                <i class="ti ti-warning label-icon label-icon-danger"></i>
                {{session('message_error')}}
            </p>
    
    </div>
    
    @endif
     <!-- Input Groups start -->
     <div class="row">
        <!-- Basic Input Groups start -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add District</h5>
                </div>
               
                <div class="card-body">
                    <div class="app-form">
                        <form class="row g-3 app-form" enctype="multipart/form-data" action="{{ route('add-district-process') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Name </label>
                                    @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                                    <div class="input-group mb-3">
                                        <input aria-describedby="basic-addon1" aria-label="Name"
                                            class="form-control b-r-right" placeholder="District Name"
                                            type="text" name="name">  
                                    </div>
                                    
                                    <label class="form-label">Region </label>
                                    @error('region') <small style="color:red"> {{ $message}}</small> @enderror
                                    <div class="input-group mb-3">
                                       <select class="form-control" name="region">
                                        <option value="" selected disabled>--Choose Region--</option>
                                        @foreach ($list as $lists)
                                        <option value="{{ $lists->id }}">{{ $lists->name }}</option>
                                        @endforeach
                                       </select> 
                                    </div>

                                    <label class="form-label">Status </label>
                                    @error('status') <small style="color:red"> {{ $message}}</small> @enderror


                                    <div class="input-group mb-3">
                                    <select class="form-control b-r-right" name="status">
                                        <option value="" selected disabled>--Choose Status--</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add District
                                    </button>
                                </div>
                                <div class="col-6">
                                    <div class="app-datatable-default overflow-auto">
                                        <table class="display app-data-table default-data-table" id="example">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Region</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    @php
                                                    $i=1;
                                                  @endphp
                                                  @if($dist)
                                                  @foreach($dist as $lists)
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ $lists->name }}</td>
                                                        <td>{{ $lists->regionname->name}} </td>
                                                        <td>{{ $lists->status }}</td>
                                                        <td> <a href="{{route('edit-district',Crypt::encrypt($lists->id))}}" class="btn btn-sm btn-success" data-bs-custom-class="custom-success"
                                                            data-bs-html="true"
                                                            data-bs-toggle="tooltip" title="Edit" type="button"><i class="fa fa-edit"></i>
                                                       
                                                        </a></td>
                                                    </tr>
                                                    @php
                                                    $i++;
                                                  @endphp
                                                  @endforeach
                                                  @endif

                                                 
                                              
                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                           
                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection

@section('scripts')
    
@endsection