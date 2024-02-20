@extends("User.master");
@section("content")

<div class="container-lg  mb-3 ">
    <div class="row my-3">

      <div class="col-xxl-8">
        <div class=" card shadow-sm ">
            <div class="mx-3 p-1 my-4 border-bottom  ">
                <div class="d-flex justify-content-between align-items-end ">
                    <div class="">
                        @if (Auth::user()->image == null)
                        <img src="{{asset("image/default.jpg")}}" style="width: 200px" class=" img-thumbnail shadow-sm" alt="">
                        @else
                        <img src="{{asset("storage/".Auth::user()->image)}}" style="width: 200px" class=" img-thumbnail shadow-sm" alt="">
                        @endif
                    </div>
                    <div class="">
                        <a href="" class=" text-decoration-none"><i class="fa-solid fa-pen text-dark fs-5"></i></a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h4 class="">{{$user->name}}</h4>
                        <p class="text-muted">@if ($user->type != null)
                            {{$user->type}}
                        @else
                            Undecided
                        @endif</p>
                    </div>
                    <div class="col-3">
                        <div class="d-flex justify-content-start align-items-center my-2">
                            <div class="mx-2"><i class="fa-solid fa-phone fs-5"></i></div>
                            <div class="mx-2">{{$user->phone}}</div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center my-2">
                            <div class="mx-2"><i class="fa-solid fa-location-dot fs-5"></i></div>
                            <div class="mx-2">{{$user->address}}</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex justify-content-start align-items-center my-2">
                            @if ($user->gender == null)
                            <div class="mx-2"><i class="fa-solid fa-venus-mars"></i></div>
                            <div class="mx-2">Undecided</div>
                            @else
                            <div class="mx-2">@if ($user->gender == "Male")
                                <i class="fa-solid fa-venus-mars fs-5"></i>
                            @elseif($user->gender == "Female")
                            <i class="fa-solid fa-venus fs-5"></i>
                            @endif
                             </div>
                            <div class="mx-2">{{$user->gender}}</div>
                            @endif
                        </div>
                        <div class="d-flex justify-content-start align-items-center my-2">
                            <div class="mx-2"><i class="fa-solid fa-envelope fs-5"></i></div>
                            <div class="mx-2">{{$user->email}}</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mx-3 border-bottom my-2">
                <div class="d-flex align-items-start">
                    <div class="jobStatus-icon me-2">
                        <i class="fa-solid fa-industry fs-4"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="">Employment Status</h5>
                        @if ($userStatus->employment_status == 0)
                        <p class="">Not Open To Work</p>
                        @else
                        <p>Open To Work</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mx-3 border-bottom my-2">
                <div class="d-flex align-items-start">
                    <div class="jobStatus-icon me-2">
                        <i class="fa-solid fa-up-right-and-down-left-from-center fs-4"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="">Experience Level</h5>
                        <p>{{$userStatus->exp_level}}</p>
                    </div>
                </div>
            </div>
            <div class="mx-3 border-bottom my-2">
                <div class="d-flex align-items-start">
                    <div class="jobStatus-icon me-2">
                        <i class="fa-solid fa-industry fs-4"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="">Job Function / Category</h5>
                        <p>{{$userStatus->job_category}}</p>
                    </div>
                </div>
            </div>
            <div class="mx-3 border-bottom my-2">
                <div class="d-flex align-items-start">
                    <div class="jobStatus-icon me-2">
                        <i class="fa-solid fa-industry fs-4"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="">Expected Salary</h5>
                        <p class="fs-5">$ {{$userStatus->expected_salary}} Ks</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="mt-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="fs-5 mx-3 align-middle">
                        Skills
                    </div>
                    <div class="  d-flex justify-content-around">
                        <button class="btn btn-info">
                            <i class="fa-solid fa-plus"></i> Add
                        </button>
                    </div>
                </div>
                <div class=" mt-3">
                    <div class=" d-flex justify-content-between align-items-start">
                        <div class="d-flex ">
                            <div class="fs-2 bg-light p-3 text-info">
                                <i class="fa-solid fa-building-flag"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Sale Assistant</h5>
                                <p> Date</p>
                            </div>

                        </div>
                        <div class="fs-5 text-dark mt-2">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                </div>
            </div>
          </div>
          <div class="mt-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="fs-5 mx-3 align-middle">
                        Skills
                    </div>
                    <div class="  d-flex justify-content-around">
                        <button class="btn btn-info">
                            <i class="fa-solid fa-plus"></i> Add
                        </button>
                    </div>
                </div>
                <div class=" mt-3">
                    <div class=" d-flex justify-content-between align-items-start">
                        <div class="d-flex ">
                            <div class="fs-2 bg-light p-3 text-info">
                                <i class="fa-solid fa-building-flag"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Sale Assistant</h5>
                                <p> Date</p>
                            </div>

                        </div>
                        <div class="fs-5 text-dark mt-2">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                </div>
            </div>
          </div>
      </div>
      <div class="col-xxl-4">

            <div class="card p-3 shadow-md">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class=" fw-medium">Open to work opportunity</h5>
                    <div class="d-flex justify-content-lg-between">
                        <button class=" btn btn-sm bg-primary mx-2 px-3">Yes</button>
                        <button class=" btn btn-sm bg-primary mx-2 px-3">No</button>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="h4 fw-light">Your CV Attachment</h4>
                <div class="card p-3">
                    <div class="d-flex justify-content-start align-items-center border-bottom py-2">
                        <div class="fs-3 mx-3 align-middle">
                            <i class="fa-solid fa-file-pdf text-danger"></i>
                        </div>
                        <div class=" mx-3 align-middle">
                            @if (Auth::user()->cv_file ==null)
                            <p>No CV Yet</p>
                            @else
                            <p>{{Auth::user()->file_cv}}</p>
                            @endif
                        </div>
                    </div>
                    <div class=" mt-3">
                        <div class="btn bg-primary w-100 px-3 py-2  ">Upload your CV</div>
                    </div>
                </div>
            </div>

            <div class="mt-3">

                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                        <div class="fs-5 mx-3 align-middle">
                            Work Experiences
                        </div>
                        <div class="  d-flex justify-content-around">
                            <button class="btn btn-info">
                                <i class="fa-solid fa-plus"></i> Add
                            </button>
                        </div>
                    </div>
                    <div class=" mt-3">
                        <div class=" d-flex justify-content-between align-items-start">
                            <div class="d-flex ">
                                <div class="fs-2 bg-light p-3 text-info">
                                    <i class="fa-solid fa-building-flag"></i>
                                </div>
                                <div class="ms-3">
                                    <h5>Sale Assistant</h5>
                                    <p> Date</p>
                                </div>

                            </div>
                            <div class="fs-5 text-dark mt-2">
                                <i class="fa-solid fa-pen"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-3">

                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                        <div class="fs-5 mx-3 align-middle">
                            Work Experiences
                        </div>
                        <div class="  d-flex justify-content-around">
                            <button class="btn btn-info">
                                <i class="fa-solid fa-plus"></i> Add
                            </button>
                        </div>
                    </div>
                    @foreach ($userWorkExperience as $exp)
                    <div class=" mt-3">
                        <div class=" d-flex justify-content-between align-items-start">
                            <div class="d-flex ">
                                <div class="fs-2 bg-light p-3 text-info">
                                    <i class="fa-solid fa-building-flag"></i>
                                </div>
                                <div class="ms-3">
                                    <h5>{{$exp->work_title}}</h5>
                                    <p> From : {{$exp->start_date->format('j-F-Y')}} - {{$exp->end_date->format('j-F-Y')}}</p>
                                </div>

                            </div>
                            <div class="fs-5 text-dark mt-2">
                                <i class="fa-solid fa-pen"></i>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-3">
                <h4 class="h4 fw-light">Your CV Attachment</h4>
                <div class="card p-3">
                    <div class="d-flex justify-content-start align-items-center border-bottom py-2">
                        <div class="fs-3 mx-3 align-middle">
                            <i class="fa-solid fa-file-pdf text-danger"></i>
                        </div>
                        <div class=" mx-3 align-middle">
                            @if (Auth::user()->cv_file ==null)
                            <p>No CV Yet</p>
                            @else
                            <p>{{Auth::user()->file_cv}}</p>
                            @endif
                        </div>
                    </div>
                    <div class=" mt-3">
                        <div class="btn bg-primary w-100 px-3 py-2  ">Upload your CV</div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="fw-light"> Featured Companies</h4>
                <div class="card p-3">
                    <div class="p-2">
                      <div class="container-fluid">
                        <div class="row">

                            <div class="col m-1">
                                <a href="" target="_blank"><img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwidX-fOL9cfa69M1fQ7YbbraX75pGBFzpwSrxjtS3MQ8WA==" alt=""></a>
                            </div>
                            <div class="col m-1">
                                <a href="">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwicnhGD-P_RYAs31iYUbWdOSYJzldgiQGlkI_I4iz9WEeg==" alt="">
                                </a>
                            </div>
                            <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwifOYqskJhfW0DN6K_n-hdCgo3RXP5mNoYWLjX5Vnb6p3QxO6GEBDNuSizaUc3xQ7QBtEqovBV2f3EHn43gjwJTc" alt="">
                                </a>
                            </div>
                            <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwicnhGD-P_RYAs31iYUbWdOSYJzldgiQGlkI_I4iz9WEeg==" alt="">
                                </a>
                            </div>
                            <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwifOYqskJhfW0A-LF4OQZntCRW2Bie4CiophOY2xlxEDgm0dilqt4QIksmAZcDgiUw0=" alt="">
                                </a>
                            </div>
                             <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwidX-fOL9cfa69M1fQ7YbbraX75pGBFzpwSrxjtS3MQ8WA==" alt="">
                                </a>
                            </div>
                            <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwifOYqskJhfW0Oq9pbcxOehWjb1mvekmcLuL2GHEmYQXWWU3lbCvwNMj3CZfCFpbvd2HeqfPKMtPm6frtD8taE2ppoxELDBGY7y69w7H7qHENxObuYzxps6dfbLRUwAny2k=" alt="">

                                </a>
                            </div>
                            <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwifEffEUxW0WJEs74QAPolPzaYy0TcZmarbxJjnpbA036A==" alt="">
                                </a>
                            </div>
                            <div class="col m-1">
                                <a href="" target="_blank">
                                    <img src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLKCh5ySN9sCJtzs0dmCGwifOYqskJhfW0PSr5L7I8aULB-Amxka7Ybjm_rQx4YlhmIaz-5ntOyIg1DdZfj1yitE=" alt="">

                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>

    </div>
    <div class="">
        <h3 class=" fw-bold">Setting</h3>
        <p>Manage your account and privacy.</p>
        <div class="text-muted fw-bold mt-1">
            Go to your Settings
        </div>

    </div>

</div>

@endsection
