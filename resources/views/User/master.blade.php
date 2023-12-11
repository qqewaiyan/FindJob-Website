<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid"  style="margin-bottom:80px">
       <div class="row thingy fixed-top">
        <div class="col-xl-3 col-6 col-md-6 col-lg-3 col-sm-6 h2 col-xxl-3 d-flex">


        <div class="ms-3 web-title align-self-center">
            Find Job.com
        </div>



        </div>
        <div class="col-xxl-7 col-xl-7 col-lg-7  nav-menu ">

            <ul class="d-flex justify-content-around list-unstyled fs-6 nav-ul">
                <li class="my-3"><a href="{{route("users.index")}}" class=" text-decoration-none text-white">Home</a></li>
                <li class="my-3"><a href="{{route("users.show",Auth::user()->id)}}" class=" text-decoration-none text-white">Profile</a></li>

                <li class="my-3"><a href="" class=" text-decoration-none text-white">Dashboard</a></li>
                <li class="my-3"><a href="" class=" text-decoration-none text-white">Job Alerts</a></li>
                <li class="my-3"><a href="" class=" text-decoration-none text-white">Application</a></li>
                <li class="my-3"><a href="" class=" text-decoration-none text-white">All companies</a></li>
            </ul>
        </div>
        <div class="col-xl-2 col-xxl-2 col-6 col-lg-2 col-md-6 col-sm-6 d-flex justify-content-end align-items-center text-white">

            <div class="d-flex me-3 align-items-center">
                <div class=" btn">
                    @if (Auth::user()->image == null)
                    <img src="{{asset("image/default.jpg")}}" style="width: 50px;" class=" img-fluid img-thumbnail" alt="">
                    @else
                    <img src="{{asset("storage/".Auth::user()->image)}}" alt="user_image">
                    @endif
                </div>
                <div class="navbar-toggle">
                    <button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <i class="fa-solid fa-bars text-white"></i>
                      </button>

                      <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                          <h2 class="offcanvas-title ms-3 d-flex justify-content-around align-items-center" id="staticBackdropLabel">

                                <div class="mx-2">
                                    @if (Auth::user()->image == null)
                                    <img src="{{asset("image/default.jpg")}}" class=" img-thumbnail shadow-sm " style="width: 60px" alt="">
                                    @else
                                    <img src="{{asset("storage/".Auth::user()->image)}}" class=" img-thumbnail shadow-sm " style="width: 60px" alt="">
                                    @endif
                                </div>
                                <div class="mx-2">
                                    <h5 class="text-dark">
                                    {{Auth::user()->name}}

                                    </h5>
                                    <a href="{{route("users.show",Auth::user()->id)}}" class=" text-decoration-none text-white fw-bolder"><h6>View My Profile</h6></a>
                                </div>

                          </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-flex  justify-content-start align-items-around">
                            <ul class=" fs-6   list-unstyled">
                                <li class="my-3 ">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-house"></i>
                                    </div>
                                    <div class="mx-1 ">
                                        Home
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-palette "></i>
                                    </div>
                                    <div class="mx-1">
                                        Dashboard
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="mx-1">
                                        Job Alerts
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-file"></i>
                                    </div>
                                    <div class="mx-1">
                                        My Applications Status
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-building"></i>
                                    </div>
                                    <div class="mx-1">
                                        All Companies
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-regular fa-file"></i>
                                    </div>
                                    <div class="mx-1">
                                        Viwe My Current CV
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-key"></i>
                                    </div>
                                    <div class="mx-1">
                                        Change Password
                                    </div>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="" class=" text-decoration-none text-muted d-flex">
                                    <div class="mx-1">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    </div>
                                    <div class="mx-1">
                                        Log out
                                    </div>
                                    </a>
                                </li>



                            </ul>


                        </div>
                        <div class="offcanvas-footer p-2  text-center">
                            <p>&copy; <span id="copyright-year">2023</span> Your Company Name. All rights reserved.</p>
                            <p> Privacy Policy | Terms & Conditions</p>
                            <div class="d-flex justify-content-center">
                                <ul class="d-flex justify-content-around align-items-center list-unstyled">
                                    <li class="mx-3 fs-3"><a href="" class="text-white"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li class="mx-3 fs-3"><a href="" class="text-white" ><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
       </div>






    </div>


    @yield("content")
        <div class="container-fluid footer">
            <div class="row py-3">

                    <div class="ms-3 col-xxl-3 col-xl-3 col-lg-3 col-md-4 text-center col-sm-4 col-12 foot-title h4 text-uppercasemy-1">
                        Find Job.com
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-7 col-12 text-center text-white my-1">
                        <p>&copy; <span id="copyright-year">2023</span> Your Company Name. All rights reserved.</p>
                    <p> Privacy Policy | Terms & Conditions</p>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 text-center my-1">
                        <h4 class="text-white">Contact us</h4>
                        <div class="d-flex justify-content-center">
                            <ul class="d-flex justify-content-around align-items-center list-unstyled">
                                <li class="mx-3 fs-2"><a href="" class="text-white"><i class="fa-brands fa-facebook"></i></a></li>
                                <li class="mx-3 fs-2"><a href="" class="text-white" ><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

            </div>
        </div>


</body>
<script src="{{asset("js/main.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
