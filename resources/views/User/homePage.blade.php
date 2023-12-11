@extends("User.master")
@section("content")
<div class="container-fluid ">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item " data-bs-interval="10000">
                    <img src="{{asset("image/coca-colllaaa.webp")}}" class="d-inline w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset("image/fwefew.png")}}" class="d-inline w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                  </div>
                  <div class="carousel-item active">
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
@endsection
