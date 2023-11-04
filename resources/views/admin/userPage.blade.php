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
            <li class="breadcrumb-item"><a href="{{route("admin#userPage")}}">User Page</a></li>
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
                <div class="h4">User Total -> {{count($user)}} </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
              <form action="{{route("admin#userPage")}}" method="GET">
                @csrf
                <div class="d-flex float-end">
                    <input type="text" name="key" value="{{request("key")}}" placeholder="e.g Mg Mg" id="" class="form-control me-2" style="width: 200px;">
                    <div class="btn btn-primary" style="width: 100px" >Search</div>
                </div>

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
                            <th class="align-middle">Contact Info</th>
                            <th class="align-middle">Joined Date</th>
                            <th class="align-middle">More Option</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($user as $u)
                       <tr class="">

                        <td class="align-middle">
                           @if ($u->image == null)
                            <img src="{{asset("image/default.jpg")}}" style="width: 100px" class=" img-thumbnail" alt="">
                           @else
                           <img src="{{asset("storage/".$u->image)}}" alt="">
                           @endif
                        </td>
                        <td class="align-middle">{{$u->name}}</td>
                        <td class="align-middle">
                            <p class="">{{$u->email}}</p>
                            <h5 class="text-muted">{{$u->phone}}</h5>
                        </td>
                        <td class="align-middle">{{$u->created_at->format("j-F-Y")}}</td>
                        <td class="align-middle ">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{route("admin#userEdit",$u->id)}}" class=" text-decoration-none text-dark fs-4 mx-2"><i class="fa-solid fa-person-booth"></i></a>
                               <a href="{{route("admin#userDelete",$u->id)}}" class="text-decoration-none text-dark fs-4 mx-2"> <i class="fa-solid fa-trash"></i></a>
                            </div>
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
