@extends("admin.master")
@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="text-center">Admin Account Detail</h3>

            <div class="container  mt-5 d-flex">
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-md-12 col-sm-12 col-12 col-lg-5  d-flex justify-content-center mt-3">
                        <div class=" mt-3">
                            @if ($admin->image != null)
                            <img src="{{asset("storage/".$admin->image)}}" style="width: 250px" alt="" class="img-thumbnail">
                            @else
                            <img src="{{asset("image/default.jpg")}}" style="width: 250px" class="" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-xxl-7  col-xl-7 col-lg-7 col-md-12 col-sm-12 mt-3 d-flex justify-content-center  ">
                        <div class="row mt-3  ">
                            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  my-3   ">

                                <div class=" d-flex    mb-3 ms-4">
                                    <div class=" icon text-danger fs-4">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class=" text ms-3">
                                        <div class="fs-5">Name</div>
                                        <div class="text-muted">{{$admin->name}}</div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                                <div class=" d-flex mb-3 ms-4">
                                    <div class="icon text-danger fs-4">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="text ms-3">
                                        <div class="fs-5">Phone</div>
                                        <div class="text-muted">{{$admin->phone}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-3 ">
                                <div class=" d-flex mb-3 ms-4">
                                    <div class="icon text-danger fs-4">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="text ms-3">
                                        <div class="fs-5">Email</div>
                                        <div class="text-muted">{{$admin->email}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  my-3 ">
                                <div class=" d-flex mb-3 ms-4">
                                    <div class="icon text-danger fs-4">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="text ms-3">
                                        <div class="fs-5">Address</div>
                                        <div class="text-muted">{{$admin->address}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="   col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-3 ">
                                <div class=" d-flex mb-3 ms-4">
                                    <div class="icon text-danger fs-4">
                                        @if ($admin->gender == "male")
                                        <i class="fa-solid fa-mars"></i>
                                        @elseif ($admin->gender == "female")
                                        <i class="fa-solid fa-venus"></i>
                                        @else
                                        <i class="fa-solid fa-genderless"></i>
                                        @endif
                                    </div>
                                    <div class="text ms-3">
                                        <div class="fs-5">Gender</div>
                                        <div class="text-muted">{{$admin->gender}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 my-2 ms-4">
                                <a href="{{route("admins.edit",$admin->id)}}"><div class="btn btn-primary text-white">Edit Profile</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
