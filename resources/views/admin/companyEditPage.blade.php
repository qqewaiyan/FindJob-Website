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
                <li class="breadcrumb-item"><a href="{{route("admin#userEdit",$company->id)}}">Company Edit Page</a></li>
                <li class="breadcrumb-item active">Find Job</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
    </div>
</div>
<div class="content">
    <div class="container">
        <h3 class="text-center fw-bold">Company Profile</h3>

        <div class="row mt-3">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 mt-3 ">
               @if ($company->image == null)
               <img src="{{asset("image/default.jpg")}}" style="width: 250px" class="" alt="">
               @else
               <img src="{{asset("storage/".$company->image)}}" alt="">
               @endif

            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 ">
                <div class="row">
                    <input type="hidden" id="userId" value="{{$company->id}}">
                    <div class="col-6">
                       <label for="userName">Company Name</label>
                       <input type="text" class="form-control" name="name" disabled id="userName" value="{{$company->name}}" placeholder="Your Name">
                    </div> <div class="col-6 ">
                        <label for="companyPhone">Phone</label>
                        <input type="text" class="form-control" name="phone" disabled id="companyPhone" value="{{$company->phone}}" placeholder="Your Phone Number">
                    </div>
                    <div class="col-12 my-2">
                        <label for="companyEmail">Email</label>
                        <input type="email" class="form-control" name="email" disabled id="companyEmail" value="{{$company->email}}" placeholder="Your Email">
                    </div>
                    <div class="col-6 my-1">
                        <label for="companyAddress">Address</label>
                        <input type="text" class="form-control" name="address" disabled id="companyAddress" value="{{$company->address}}" placeholder="Your Address">
                     </div>
                     <div class="col-6  my-1">
                        <label for="companyStatus">Company Status</label>
                        <select name="role" id="companyStatus" class="form-control" disabled>
                            <option value="0" @if ($company->status == 0) selected @endif>Not Verified</option>
                            <option value="1"  @if ($company->status == 1) selected @endif>Verified</option>

                        </select>
                    </div>
                     <div class="col-6  my-1">
                        <label for="companyRole">Company Role</label>
                        <select name="role" id="userRole" class="form-control">
                            <option value="admin" @if ($company->role == "admin") selected @endif>Admin</option>
                            <option value="user"  @if ($company->role == "user") selected @endif>User</option>
                            <option value="company"  @if ($company->role == "company") selected @endif>Company</option>
                        </select>
                    </div>
                     <div class="col-6 my-1">
                        <label for="employee_number">Employee Number</label>
                        <input type="text" class="form-control" value="{{$company->cv_file}}" disabled name="employee_number" id="employee_number" placeholder="Number Of Your Employee">
                     </div>
                      <div class="col-6  my-1">
                         <label for="type">Type</label>
                         <input type="text" class="form-control" disabled name="type" id="type" value="{{$company->type}}" placeholder="Company Type">
                     </div>
                     <div class="col-6  my-1">
                        <label for="date">Created Date</label>
                        <input type="text" class="form-control" disabled name="created_at" id="date" value="{{$company->created_at->format("j-F-Y")}}" placeholder="Start Date">
                    </div>
                     <div class="col-12 mt-1 mb-5">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" disabled class="form-control" >
                            {{$company->description}}
                        </textarea>
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
                window.location.href="/admin/company/page";
             }
           })
        })
    })
</script>
@endsection
