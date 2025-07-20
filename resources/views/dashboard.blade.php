@php $pageName = "dashboard"; $subpageName = ""; @endphp

@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-xxl-5 ">
                <div class="card overview-details-box b-s-3-primary ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex gap-3 align-items-center">
                                                <span class="bg-primary h-60 w-60 d-flex-center flex-column rounded-3">
                                                    <span class="f-w-500">Mon</span>
                                                    <span>20</span>
                                                </span>

                                    <div>
                                        <p class="text-dark f-w-600 txt-ellipsis-1">Task Overview </p>
                                        <div class="chart-card-box d-flex align-items-center">
                                            <div id="taskOverview"></div>
                                            <span class="badge bg-primary b-r-50">
                                                           80
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 mt-3 mt-sm-0">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-grow-1">
                                        <p class="text-dark f-w-500 txt-ellipsis-1">Provided Time</p>
                                        <h6 class="mb-0 text-primary">6 Day's</h6>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-dark f-w-500 txt-ellipsis-1">Working Time</p>
                                        <h6 class="mb-0 text-primary">60M</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overview-details-box b-s-3-success ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex gap-3 align-items-center">
                                                <span class="bg-success h-60 w-60 d-flex-center flex-column rounded-3">
                                                    <span class="f-w-500">Fri</span>
                                                    <span>22</span>
                                                </span>

                                    <div>
                                        <p class="text-dark f-w-600 txt-ellipsis-1">Task Overview </p>
                                        <div class="chart-card-box d-flex align-items-center">
                                            <div id="taskOverview1"></div>
                                            <span class="badge bg-success b-r-50">
                                                           152
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 mt-3 mt-sm-0 gap-1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <p class="text-dark f-w-500 txt-ellipsis-1">Provided Time</p>
                                        <h6 class="mb-0 text-success">8 Day's</h6>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-dark f-w-500 txt-ellipsis-1">Working Time</p>
                                        <h6 class="mb-0 text-success">40M</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overview-details-box b-s-3-danger ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex gap-3 align-items-center">
                                                <span class="bg-danger h-60 w-60 d-flex-center flex-column rounded-3">
                                                    <span class="f-w-500">Wed</span>
                                                    <span>25</span>
                                                </span>

                                    <div>
                                        <p class="text-dark f-w-600 txt-ellipsis-1">Task Overview </p>
                                        <div class="chart-card-box d-flex align-items-center">
                                            <div id="taskOverview2"></div>
                                            <span class="badge bg-danger b-r-50">
                                                           200
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 mt-3 mt-sm-0 gap-1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <p class="text-dark f-w-500 txt-ellipsis-1">Provided Time</p>
                                        <h6 class="mb-0 text-danger">3 Week</h6>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-dark f-w-500 txt-ellipsis-1">Working Time</p>
                                        <h6 class="mb-0 text-danger">80H</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-xxl-3">
                <div class="card overflow-hidden equal-card">
                    <div class="card-body p-0">
                        <div class="meeting-call-box bg-gradient-mode">
                            <img alt="img"
                                 class="img-fluid position-relative z-1"
                                 src="assets/images/dashboard/project/meeting-avtar.png">
                            <img alt="img"
                                 class="img-fluid bg-vector-img"
                                 src="assets/images/dashboard/project/bg-round.png">
                            <img alt="img"
                                 class="img-fluid bg-vector-img1"
                                 src="assets/images/dashboard/project/bg-round2.png">

                            <div class="meeting-details-box d-flex align-items-center">
                                <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-dark flex-shrink-0">
                                    <img alt="image" class="img-fluid"
                                         src="assets/images/avatar/2.png">
                                </div>
                                <div class="flex-grow-1 ps-2 text-start">
                                    <div class="fw-medium txt-ellipsis-1"> Bette Hagenes</div>
                                    <div class="text-muted f-s-12 txt-ellipsis-1">Wed Developer</div>
                                </div>
                                <button class="btn btn-success btn-sm">Join</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-lg-4">

                <div class="card equal-card project-data-container">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Project </h6>

                            <form class="app-form flex-shrink-0">
                                <select aria-label="Default select example"
                                        class="form-select custom-form-select ">
                                    <option selected="">Filter</option>
                                    <option value="1">Fashion</option>
                                    <option value="2">Books</option>
                                    <option value="3">Sports</option>
                                    <option value="4">Fitness</option>
                                </select>
                            </form>
                        </div>
                        <div class="row project-row mt-4">
                            <div class="col-sm-4">
                                <div class="project-status-card bg-primary text-center w-100 rounded p-3 shadow">
                                             <span class="bg-white h-45 w-45 d-flex-center b-r-50 status-icon">
                                                <i class="ti ti-clock-hour-5 f-s-20 text-primary"></i>
                                             </span>
                                    <p class="text-white mb-0 txt-ellipsis-1">Running</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="project-status-card bg-success text-center w-100 rounded p-3 shadow">
                                            <span class="bg-white h-45 w-45 d-flex-center b-r-50 status-icon">
                                                <i class="ti ti-circle-check f-s-20 text-success"></i>
                                             </span>
                                    <p class="text-white mb-0 txt-ellipsis-1">Completed</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="project-status-card bg-danger text-center w-100 rounded p-3 shadow">
                                            <span class="bg-white h-45 w-45 d-flex-center b-r-50 status-icon">
                                                <i class="ti ti-refresh f-s-20 text-danger"></i>
                                             </span>
                                    <p class="text-white mb-0 txt-ellipsis-1">Pending</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <ul class="">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="bg-danger-200 d-flex-center p-1 w-30 h-30 b-r-8 flex-shrink-0">
                                            <img alt="avtaar" class="img-fluid" src="assets/images/icons/language/logo1.png">
                                        </div>
                                        <div class="ms-2 flex-grow-1">
                                            <p class="text-dark-800 mb-0 f-w-500 f-s-15 txt-ellipsis-1">New Task Assigned</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="bg-success-200 d-flex-center p-1 w-30 h-30 b-r-8 flex-shrink-0">
                                            <img alt="avatar" class="img-fluid" src="assets/images/icons/language/logo5.png">
                                        </div>
                                        <div class="ms-2 flex-grow-1">
                                            <p class="text-dark-800 mb-0 f-w-500 f-s-15 txt-ellipsis-1">Database Migration</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="bg-info-200 d-flex-center p-1 w-30 h-30 b-r-8 flex-shrink-0">
                                            <img alt="avatar" class="img-fluid" src="assets/images/icons/language/logo6.png">
                                        </div>
                                        <div class="ms-2 flex-grow-1">
                                            <p class="text-dark-800 mb-0 f-w-500 f-s-15 txt-ellipsis-1">New Task Assigned</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="bg-primary-200 d-flex-center p-1 w-30 h-30 b-r-8 flex-shrink-0">
                                            <img alt="avatar" class="img-fluid" src="assets/images/icons/language/logo4.png">
                                        </div>
                                        <div class="ms-2 flex-grow-1">
                                            <p class="text-dark-800 mb-0 f-w-500 f-s-15 txt-ellipsis-1">API Development
                                                Phase</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="bg-danger-200 d-flex-center p-1 w-30 h-30 b-r-8 flex-shrink-0">
                                            <img alt="avatar" class="img-fluid" src="assets/images/icons/language/logo3.png">
                                        </div>
                                        <div class="ms-2 flex-grow-1">
                                            <p class="text-dark-800 mb-0 f-w-500 f-s-15 txt-ellipsis-1">UI/UX Design Update</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="bg-info-200 d-flex-center p-1 w-30 h-30 b-r-8 flex-shrink-0">
                                            <img alt="avatar" class="img-fluid" src="assets/images/icons/language/logo2.png">
                                        </div>
                                        <div class="ms-2 flex-grow-1">
                                            <p class="text-dark-800 mb-0 f-w-500 f-s-15 txt-ellipsis-1">New Task Assigned</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
 
  
 
   
        </div>
    </div>

@endsection

@section('scripts')
    
@endsection