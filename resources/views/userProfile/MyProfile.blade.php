@extends('layouts.userapp')

@section('content')

<div class="page-header">
  <div class="page-title">
      <h3>User Profile Manager</h3>
      
      <div>
          <div   class="btn btn-outline-light">
              <i data-feather="calendar"></i>
              <span> &nbsp;&nbsp; {{ now()->format('F j, Y, g:i a') }}  </span>
          </div>
          
          
      </div>
  </div>
</div>
 
<div class="row">
  <div class="col-md-12">
     @if (session('message_error'))
         
          <div class="alert alert-danger alert-with-border" role="alert"><i data-feather="thumbs-down"></i>
                      <b>{{session('message_error')}}</b>
         </div>
        @endif
         @if (session('success'))
         
          <div class="alert alert-success alert-with-border" role="alert"><i data-feather="thumbs-up"></i>
                      <b>{{session('success')}}</b>
         </div>
        @endif
        <div class="profile-container" style="background: url(../frontend/assets/media/image/header.png)">
                <div class="profile-bar">
                    <div class="d-flex align-items-center">
                        <figure class="avatar mr-3">
                            <img src="{{asset('frontend/assets/media/image/user/free-user-icon-3297-thumb.png')}}"
                                 class="rounded-circle" alt="...">
                        </figure>
                        <div>
                            <h4 class="mb-1">{{ Auth::user()->firstname }} {{Auth::user()->lastname}}</h4>
                            <small class="opacity-7">{{ Auth::user()->email }} </small>
                        </div>
                    </div>
                    
                </div>
        </div> 

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">About</h6>
                        
                        <div>
                            <ul class="list-group list-group-flush mb-3">
                                
                                <li class="list-group-item px-0"> <button class="btn btn-sm btn-primary"><i data-feather="users"></i></button>  {{ Auth::user()->firstname }} {{Auth::user()->lastname}}</li>
                                <li class="list-group-item px-0"> <button class="btn btn-sm btn-primary"><i data-feather="phone"></i></button> {{ Auth::user()->phone }}</li>
                                <li class="list-group-item px-0"> <button class="btn btn-sm btn-primary"><i data-feather="mail"></i></button> {{ Auth::user()->email }}</li>
                                    <li class="list-group-item px-0"> <button class="btn btn-sm btn-primary"><i data-feather="user"></i></button> {{ Auth::user()->staff_id }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Change Password</h6>
                        

                        <form enctype="multipart/form-data" method="POST" action="{{route('chanage-password-process')}}">
                                @csrf
                            <div class="form-group">
                                <label><b>Old Password</b></label>
                                <input type="password" name="current_password" class="form-control" placeholder="Enter Old Password"/>
                                  @error('current_password') <small style="color:red"> {{ $message}}</small> @enderror
                            </div>
                            <div class="form-group">
                                <label><b>New Password</b></label>
                                <input type="password" name="new_password" class="form-control" placeholder="Enter New Password"/>
                                  @error('new_password') <small style="color:red"> {{ $message}}</small> @enderror
                            </div>
                            <div class="form-group">
                                <label><b>Confirm Password</b></label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password"/>
                                  @error('confirm_password') <small style="color:red"> {{ $message}}</small> @enderror
                            </div>
                            <button type="submit" class="btn btn-success"><i data-feather="lock"></i> &nbsp;Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

 
@endsection

@section('scripts')
    
@endsection