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
    <div class="container-fluid">
       <div class="row thingy fixed-top">
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


    <div class="container-fluid " style="margin-top:80px">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{asset("image/coca-colllaaa.webp")}}" class="d-inline w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset("image/fwefew.png")}}" class="d-inline w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset("image/ewfwefew.png")}}" class="d-inline w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
    <div class="container-fluid employer-tag">
      <div class="row pb-5 ">
            <h3 class="text-center mt-5 employer-title mb-4">Top Employers</h3>

                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2 ">
                    <a href="https://www.unilever.com/"  target="_blank"><img src="{{asset("image/unilever.png")}}" class=""  alt=""></a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                   <a href="https://www.google.com/" target="_blank"> <img src="{{asset("image/google.png")}}"  alt=""></a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                    <a href="https://www.blackrock.com/corporate/global-directory" target="_blank"><img src="{{asset("image/blackrock.jpg")}}" alt=""></a>
                </div>
                <div class=" col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                   <a href="https://www.heineken.com/" target="_blank"> <img src="{{asset("image/hein.png")}}" class="" alt=""></a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                    <a href="https://www.yomabank.com/" target="_blank"><img src="{{asset("image/yoma.png")}}"  alt=""></a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                   <a href="https://ooredoo.com.mm/portal/en/index" target="_blank"> <img src="{{asset("image/ooredoo.png")}}"   alt=""></a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                    <a href="https://www.mit.edu/" target="_blank"><img src="{{asset("image/mit.jpg")}}" alt=""></a>
                </div>
                <div class=" col-xxl-3 col-xl-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-2">
                   <a href="https://www.walmart.com/" target="_blank"> <img src="{{asset("image/walmary.jpg")}}" class="" alt=""></a>
                </div>

      </div>

    </div>

        <div class="container card mt-5 shadow-lg  ">
            <div class="row card-body p-5 d-flex align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                   <h4 class=" ms-4 font-weight-bolder">Looking to work in Myanmar?</h4>
                   <p class="fs-5 text-muted ms-4">Search jobs for Repeats for Foreigners</p>
                   <div class="row my-4">
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 my-2  d-flex justify-content-center btn p-2 btn-info mx-2">
                      Find Job
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 my-2 d-flex justify-content-center p-2 btn  btn-primary btn-primary mx-2">
                       Find Employee
                    </div>
                   </div>
                </div>

                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12  d-flex justify-content-center ">

                           <img src="{{asset("image/interview.webp")}}" class="w-100 h-100 mr-inter" alt="">


                    </div>

             </div>
        </div>
        <div class="container">
            <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12  d-flex justify-content-center ">

                <img src="{{asset("image/interview.webp")}}" class="img-fluid ms-inter" alt="">


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
