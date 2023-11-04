@extends("admin.master")
@section("content")

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Find Job.com</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route("admin#userEdit",$user->id)}}">User Edit Page</a></li>
                    <li class="breadcrumb-item active">Find Job</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
        </div>
    </div>
    <div class="content">
        <div class="container">
            <h3 class="text-center fw-bold">Edit Profile</h3>
            @if ($user->status == 0)
            <h5 class="text-center fw-bold text-danger my-3">You are not verified yet to apply! Please fill out the remaining info.</h5>
            @else
            <h5 class="text-center fw-bold text-primary my-3">You are now verified to apply! </h5>
            @endif
            <div class="row mt-3">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12  d-flex flex-column justify-content-around align-items-start ">
                   @if ($user->image == null)
                   <img src="{{asset("image/default.jpg")}}" style="width: 250px" class="" alt="">
                   @else
                   <img src="{{asset("storage/".$user->image)}}" alt="">
                   @endif
                   <input type="file" name="" class="form-control my-2" style="width: 270px" id="">
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 ">
                    <div class="row">
                        <div class="col-6">
                           <label for="userName">Username</label>
                           <input type="text" class="form-control" name="name" id="userName" value="{{$user->name}}" placeholder="Your Name">
                        </div> <div class="col-6 ">
                            <label for="userPhone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="userPhone" value="{{$user->phone}}" placeholder="Your Phone Number">
                        </div>
                        <div class="col-12 my-2">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="userEmail" value="{{$user->email}}" placeholder="Your Email">
                        </div>
                        <div class="col-6 my-1">
                            <label for="userAddress">Address</label>
                            <input type="text" class="form-control" name="address" id="userAddress" value="{{$user->address}}" placeholder="Your Address">
                         </div>
                          <div class="col-6  my-1">
                             <label for="userGender">Gender</label>
                             <select name="gender" id="userGender" class="form-control">
                                <option value="" >I rather not say</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                             </select>
                         </div>
                         <div class="col-6 my-1">
                            <label for="userCvForm">Cv Form</label>
                            <input type="file" class="form-control" name="cv_file" id="userCvForm" >
                         </div> <div class="col-6  my-1">
                             <label for="previousJob">Previous Job</label>
                             <input type="text" class="form-control" name="previous_job" id="previousJob" value="{{$user->previousJob}}" placeholder="Your Previous Job">
                         </div>
                         <div class="col-6 ">
                          <button class="btn btn-primary w-100 my-3">Update</button>
                         </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


