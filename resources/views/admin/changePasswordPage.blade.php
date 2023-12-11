@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="text-center mt-3">Admin Change Password Page</h3>

            @if (session("Match"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h6 class="align-middle">{{session("Match")}}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @elseif (session("notMatch"))
    
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h6>{{session("notMatch")}}</h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
            <div class="container-fluid  mt-5 bg-white  ">
                <div class="row">

                    <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-7 col-sm-12 col-12 card">
                        <form action="{{route("admin#updatePassword",Auth::user()->id)}}" method="POST">

                            @csrf
                            <div class="ms-5 mt-4">
                                <div class="">
                                    <div class="rounded-icon">
                                        <i class="fa-solid fa-lock  fs-4 p-3"></i>
                                    </div>

                                </div>
                                <div class=" my-3">
                                    <h5 class="text-dark fw-bolder">Change Password</h5>
                                </div>
                                <p class="text-muted">
                                    To change your password, please fill in the fields below.<br>
                                    Your Password must contain at least 8 charactors,it must also include at least one upper
                                    case letter and one lower case letter.
                                </p>
                                <div class="my-3">
                                    <label for="currentPassword"> Current Password</label>
                                    <div class="passwordInput">

                                        <i class="fa-solid fa-eye-slash iconForInput"></i>

                                        <input type="password" name="currentPassword" id="currentPassword"
                                            placeholder="Current Password" class="form-control inputPass ">
                                            @error("currentPassword")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>
                                </div>
                                <div class="my-3">
                                    <label for="newPassword"> New Password</label>
                                    <div class="passwordInput">
                                      <i class="fa-solid fa-eye-slash iconForInput "></i>
                                        <input type="password" name="newPassword" id="newPassword"
                                            placeholder="New Password" class="form-control inputPass">
                                            @error("newPassword")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>
                                </div>
                                <div class="my-3">
                                    <label for="password_confirmation"> Confirm Passwordd</label>
                                    <div class="passwordInput">
                                        <i class="fa-solid fa-eye-slash iconForInput "></i>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            placeholder="Confirm Password" class="form-control inputPass">
                                        @error("password_confirmation")
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 mt-3 d-flex justify-content-center">
                                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                                    <button class="btn btn-primary form-control" type="submit">Change Password</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-5 col-sm-12 col-12 card ">
                        <div class="mt-4 ms-3 ">
                            <div class="rounded-icon">
                                <i class="fa-solid fa-tv  fs-5 p-3"></i>

                            </div>
                            <div class="h5 fw-bolder my-3">
                                Your Devices
                            </div>
                            <p class="text-muted fs-6">
                                Your devices linked to this account in ED analytics
                            </p>
                            <form action="{{route("logout")}}" method="post">
                                @csrf
                                <div class="d-flex justify-content-center">


                                    <button class="btn btn-info text-capitalize text-white w-75" type="submit">
                                        Log out from all devices
                                    </button>


                                </div>
                            </form>
                        </div>
                        <div class="border-bottom mt-4">

                        </div>
                        <div class="">
                            <div class="d-flex justify-content-around align-items-center my-3">
                                <div class="">
                                    <i class="fa-solid fa-tv fs-5 text-primary"></i>
                                </div>
                                <div class="text-muted d-flex flex-column align-items-center">
                                    <small class=" fw-bolder">Dell 24"</small><br>
                                    <small class="">Mandalay,Myanmar-May 12,2023 at 2:30 AM</small>
                                </div>
                                <div class="d-flex align-items-center btn">
                                    <i class="fa-solid fa-arrow-right-from-bracket text-primary fs-5"></i>
                                </div>

                            </div>
                            <div class="border-bottom">

                            </div>
                        </div>

                        <div class="">
                            <div class="d-flex justify-content-around align-items-center my-3">
                                <div class="">
                                    <i class="fa-solid fa-tablet-screen-button fs-3 text-primary"></i>
                                </div>
                                <div class="text-muted d-flex flex-column  align-items-center">
                                    <small class=" fw-bolder">Samsaung Tablet</small><br>
                                    <small class="">Pyay,Myanmar-June 6,2023 at 12:30 AM</small>
                                </div>
                                <div class="d-flex align-items-center btn">
                                    <i class="fa-solid fa-arrow-right-from-bracket text-primary fs-5"></i>
                                </div>

                            </div>
                            <div class="border-bottom">

                            </div>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-around align-items-center my-3">
                                <div class="">
                                    <i class="fa-solid fa-mobile-screen fs-4 text-primary"></i>
                                </div>
                                <div class="text-muted d-flex flex-column  align-items-center">
                                    <small class=" fw-bolder">I phone 12</small><br>
                                    <small class="">Yangon,Myanmar-April 30,2023 at 4:00 AM</small>
                                </div>
                                <div class="d-flex align-items-center btn">
                                    <i class="fa-solid fa-arrow-right-from-bracket text-primary fs-5"></i>
                                </div>

                            </div>
                            <div class="border-bottom">

                            </div>
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
    var $passwordInput = $(".inputPass");
    var $inputChanger = $(".iconForInput");

    $inputChanger.click(function(){
        if ($passwordInput.attr("type") === "password") {
            $passwordInput.attr("type", "text");
        } else {
            $passwordInput.attr("type", "password");
        }
        if ($inputChanger.hasClass("fa-eye-slash")) {
            $inputChanger.toggleClass("fa-eye fa-eye-slash");
        } else {
            $inputChanger.toggleClass("fa-eye-slash fa-eye");
        }
        
    });
});

    </script>
@endsection

