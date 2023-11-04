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
<body class="reg-body">
    <div class="container-fluid">
       <div class="row thingy">
        <div class="col-xl-5 col-6 col-md-5 col-lg-5 col-sm-6 h2  d-flex">
            <div class="navbar-toggle">
            <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                <i class="fa-solid fa-bars"></i>
              </button>

              <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title ms-3" id="staticBackdropLabel">
                    Find Job.com
                  </h2>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-around align-items-center row">
                    <ul class="d-flex flex-column fs-5  justify-content-around align-items-center list-unstyled">
                        <li class="my-3"><a href="" class=" text-decoration-none text-dark">Home</a></li>
                        <li class="my-3"><a href="" class=" text-decoration-none text-dark">About</a></li>

                        <li class="my-3"><a href="" class=" text-decoration-none text-dark">Contact</a></li>
                    </ul>
                    <div class=""><a href="{{route("login")}}"><button class="offcan-btn">Login</button></a></div>
                    <div class=""><a href="{{route("register")}}"><button class="offcan-btn">Register</button></a></div>

                </div>
                <div class="offcanvas-footer bg-danger p-2  text-center">
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

        <div class="ms-3 web-title">
            Find Job.com
        </div>



        </div>
        <div class="col-4 nav-menu ">

            <ul class="d-flex justify-content-around list-unstyled fs-5 nav-ul">
                <li class="mt-2"><a href="" class=" text-decoration-none text-dark">Home</a></li>
                <li class="mt-2"><a href="" class=" text-decoration-none text-dark">About</a></li>

                <li class="mt-2"><a href="" class=" text-decoration-none text-dark">Contact</a></li>
            </ul>
        </div>
        <div class="col-xl-2 col-6 col-lg-3 col-md-3 col-sm-6 float-right text-white d-flex justify-content-around align-items-center">
            <a href="{{route("login")}}"><button class=" btn  btn-warning text-dark ">Login</button></a>
            <a href="{{route("register")}}"><button class=" btn  btn-warning text-dark">Register</button></a>
        </div>
       </div>






    </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 my-2">
                   <div class="card ">
                    <div class="card-header text-capitalize text-center p-3 h5 bg-navy">
                        Are you looking for a job in a company?
                    </div>
                    <div class="card-body row p-5">
                       <h5 class="text-muted mt-3 mb-5"> Register here to explore your oppotunitys!</h5>
                       <button class="btn btn-primary mb-3 py-3 text-capitalize"><a href="{{route("auth#registerUser")}}" class=" text-decoration-none text-white">Sign Up for you<i class="fa-solid fa-user ms-2  fs-4"></i></a></button>
                    </div>
                   </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 my-2">
                    <div class="card">
                    <div class="card-header text-capitalize text-center p-3 h5" >
                        Are you here to hire for your company?
                    </div>
                    <div class="card-body row p-5">
                        <h5 class="text-muted mt-3 mb-5"> Register here to hire the talented emplyoee!</h5>
                        <button class="btn btn-primary mb-3 py-3 text-capitalize"><a href="{{route("auth#registerCompany")}}" class="text-decoration-none text-white">Sign Up for your company <i class="fa-solid fa-user-tie ms-2 fs-4"></i></a></button>
                     </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="container mt-4 mb-4">

            <p class="h3 fw-light">Popular Industries</p>
            <div class="d-flex justify-content-around align-items-center row">

            <a class=" text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
             <div class="circular-button">

                  <i class="fa-solid fa-burger fs-2"></i>

             </div>
             <p class="industry-title text-muted">
                Fast Food and Beverage/ Retail Store
             </p>
            </a>
                <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-computer fs-2"></i>

                </div>
                <p class="industry-title text-muted">
                    IT/ Computer
                 </p>
               </a>

               <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-building-flag fs-2"></i>

                </div>
                <p class="industry-title text-muted">
                    Constrution/ Building
                 </p>
               </a>
               <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-building-columns fs-2"></i>

                </div>
                <p class="industry-title text-muted">
                    Banking/ Insurance
                 </p>
               </a>
               <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-graduation-cap fs-2"></i>

                </div>
                <p class="industry-title text-muted">
                   Education
                 </p>
               </a>
               <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-building-columns fs-2"></i>

                </div>
                <p class="industry-title text-muted">
                    Banking/ Insurance
                 </p>
               </a>
               <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-user-tie fs-2"></i>
                </div>
                <p class="industry-title text-muted">
                   Human Resource/ Manager
                 </p>
               </a>
               <a class="text-decoration-none col-xxl-1 col-xl-1 d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-3 col-sm-3 col-6 my-2 " href="#">
                <div class="circular-button">

                    <i class="fa-solid fa-people-group fs-2"></i>

                </div>
                <p class="industry-title text-muted">
                    Retail/ Sale
                 </p>
               </a>

            </div>
        </div>



        <div class="container-fluid footer">
            <div class="row py-3">

                    <div class="ms-3 col-xxl-3 col-xl-3 col-lg-3 col-md-4 text-center d-flex justify-content-center align-items-center col-sm-4 col-12 foot-title h4 text-uppercasemy-1">
                        Find Job.com
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-7 col-12 text-center text-white my-1 flex-column d-flex justify-content-center align-items-center">
                        <p>&copy; <span id="copyright-year">2023</span> Your Company Name. All rights reserved.</p>
                    <p> Privacy Policy | Terms & Conditions</p>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 text-center my-1">
                        <h5 class="text-white">Contact us</h5>
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
