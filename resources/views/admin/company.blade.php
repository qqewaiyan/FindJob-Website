@extends('admin.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Find Job.com</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin#companyPage') }}">Company Page</a></li>
                        <li class="breadcrumb-item active">Find Job</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-5 col-5">
                    <div class="h4">Company Total -> {{ count($company) }} </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
                    <form action="{{ route('admin#companyPage') }}" method="GET">
                        @csrf
                        <div class="d-flex float-end">
                            <input type="text" name="key" value="{{ request('key') }}" placeholder="e.g Mg Mg"
                                id="" class="form-control me-2" style="width: 200px;">
                            <div class="btn btn-primary" style="width: 100px">Search</div>
                        </div>

                    </form>
                </div>
            </div>


            <div class="row mt-5">
                <h3 class=" fw-bold">Company Status</h3>
                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                    <form action="{{route("admin#companyStatusSearch")}}" method="GET" class="d-flex justify-content-start">
                        @csrf

                        <select name="companyStatus" id="" class="form-control w-50" id="">
                            <option value="">All</option>
                            <option value="0"@if (request("companyStatus") == "0") selected @endif>Not Verified</option>
                            <option value="1"@if (request("companyStatus") == "1") selected @endif>Verified</option>
                        </select>


                        <button class="btn bg-primary ms-3" style="width: 120px">Search</button>

                    </form>
                </div>

            </div>
            <div class=" table-responsive">
                <div class=" table-responsive-sm">
                    <table class="table table-hover table-light mt-5 text-center align-middle">

                        <thead>
                            <tr class="">

                                <th class="align-middle">Image</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Type</th>
                                <th class="align-middle">Employee Number</th>
                                <th class="align-middle">Contact Info</th>
                                <th class="align-middle">Joined Date</th>
                                <th class="align-middle">More Option</th>
                                <th class="align-middle">Verify Status</th>
                            </tr>
                        </thead>
                        <tbody id="companyTable">
                            @foreach ($company as $c)
                                <tr class="">
                                    <input type="hidden" name="" class="companyId" value="{{$c->id}}">
                                    <td class="align-middle">
                                        @if ($c->image == null)
                                            <img src="{{ asset('image/default.jpg') }}" style="width: 100px"
                                                class=" img-thumbnail" alt="">
                                        @else
                                            <img src="{{ asset('storage/' . $c->image) }}" alt="">
                                        @endif
                                    </td>
                                    <td class="align-middle">{{ $c->name }}</td>
                                    <td class="align-middle">
                                        @if ($c->type == null)
                                            null
                                        @else
                                            {{ $c->type }}
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        @if ($c->employee_number == null)
                                            null
                                        @else
                                            {{ $c->employee_number }}
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <p class="">{{ $c->email }}</p>
                                        <h5 class="text-muted">{{ $c->phone }}</h5>
                                    </td>
                                    <td class="align-middle">{{ $c->created_at->format('j-F-Y') }}</td>
                                    <td class="align-middle ">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('admin#companyEdit', $c->id) }}"
                                                class=" text-decoration-none text-dark fs-4 mx-2"><i
                                                    class="fa-solid fa-person-booth"></i></a>
                                            <a href="{{ route('admin#companyDelete', $c->id) }}"
                                                class="text-decoration-none text-dark fs-4 mx-2"> <i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <select name="" style="width: 140px;"
                                            class="currentCompanyStatus form-control text-center align-self-center
                                            @if ($c->status == '0') companyStatus-red
                                            @elseif ($c->status == '1') companyStatus-blue @endif">

                                            <option value="0" @if ($c->status == '0') selected @endif >Not Verified </option>
                                            <option value="1" @if ($c->status == '1') selected @endif> Verified</option>

                                        </select>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
@section("javaScript")
    <script>
        $(document).ready(function(){

         $status =   $(".currentCompanyStatus").val();
         $(".currentCompanyStatus").change(function(){
            $status = $(this).val();
            $parent = $(this).parents("tr");
            $id = $parent.find(".companyId").val();

            $.ajax({
                url : "/admin/company/statusChange",
                method : "GET",
                dataType : "json",
                data : {
                    "id" : $id,
                    "status" : $status
                },
                success:function(response){
               location.reload();
            }
            })

         })
        })
    </script>
@endsection

