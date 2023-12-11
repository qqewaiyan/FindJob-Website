@extends("User.master");
@section("content")

<div class="container">
    <div class="row">

      <div class="col-xxl-8 card shadow-sm ">
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
      <div class="col-xxl-4">
        rggrrg
      </div>
    </div>
</div>

@endsection
