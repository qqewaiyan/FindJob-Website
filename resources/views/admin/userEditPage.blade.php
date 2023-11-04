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

            <div class="row mt-3">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 mt-3 ">
                   @if ($user->image == null)
                   <img src="{{asset("image/default.jpg")}}" style="width: 250px" class="" alt="">
                   @else
                   <img src="{{asset("storage/".$user->image)}}" alt="">
                   @endif

                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 ">
                    <div class="row">
                        <input type="hidden" id="userId" value="{{$user->id}}">
                        <div class="col-6">
                           <label for="userName">Username</label>
                           <input type="text" class="form-control" name="name" disabled id="userName" value="{{$user->name}}" placeholder="Your Name">
                        </div> <div class="col-6 ">
                            <label for="userPhone">Phone</label>
                            <input type="text" class="form-control" name="phone" disabled id="userPhone" value="{{$user->phone}}" placeholder="Your Phone Number">
                        </div>
                        <div class="col-12 my-2">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control" name="email" disabled id="userEmail" value="{{$user->email}}" placeholder="Your Email">
                        </div>
                        <div class="col-6 my-1">
                            <label for="userAddress">Address</label>
                            <input type="text" class="form-control" name="address" disabled id="userAddress" value="{{$user->address}}" placeholder="Your Address">
                         </div>
                          <div class="col-6  my-1">
                             <label for="userGender">Gender</label>
                             <select name="gender" id="userGender" disabled class="form-control">
                                <option value="" >I rather not say</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                             </select>
                         </div>
                         <div class="col-6  my-1">
                            <label for="userRole">User Role</label>
                            <select name="role" id="userRole" class="form-control">
                                <option value="admin" @if ($user->role == "admin") selected @endif>Admin</option>
                                <option value="user"  @if ($user->role == "user") selected @endif>User</option>
                                <option value="company"  @if ($user->role == "company") selected @endif>Company</option>
                            </select>
                        </div>
                         <div class="col-6 my-1">
                            <label for="userCvForm">Cv Form</label>
                            <input type="text" class="form-control" value="{{$user->cv_file}}" disabled name="cv_file" id="userCvForm" placeholder="User CV">
                         </div>
                          <div class="col-6  my-1">
                             <label for="previousJob">Previous Job</label>
                             <input type="text" class="form-control" disabled name="previous_job" id="previousJob" value="{{$user->previousJob}}" placeholder="User Previous Job">
                         </div>




                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("javaScript")
<script>
    $(document).ready(function(){
        $userId = $("#userId").val();


        $("#userRole").change(function(){
            $role =  $("#userRole").val();
           $.ajax({
             url : "/admin/user/roleChange",
             method : "GET",
             dataType : "json",
             data : {
                "id" : $userId,
                "role" : $role,
             },
             success:function(response){
                console.log("Success");
             }
           })
        })
    })
</script>
@endsection
