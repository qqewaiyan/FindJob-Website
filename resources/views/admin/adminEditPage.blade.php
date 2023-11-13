@extends('admin.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="text-center">Admin Account Edit Page</h3>

            <div class="container  mt-5 d-flex">
                <form method="POST" action="{{route("admins.update",$admin->id)}}"  enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-md-12 col-sm-12 col-12 col-lg-5  d-flex justify-content-center mt-3">
                            <div class=" mt-3">
                                @if ($admin->image != null)
                                    <img src="{{ asset('storage/'.$admin->image) }}" alt="" style="width: 250px" class="img-thumbnail">
                                @else
                                    <img src="{{ asset('image/default.jpg') }}" style="width: 250px" class="img-thumbnail"
                                        alt="">
                                @endif
                                <input type="file" name="image" class="form-control my-3">
                            </div>



                        </div>

                        <div class="col-12 col-xxl-7  col-xl-7 col-lg-7 col-md-12 col-sm-12 mt-3   ">
                            <div class="row">

                                <div class="col-6 my-3">
                                    <label for="userName">Name</label>
                                    <input type="text" name="name" class="form-control " value="{{ $admin->name }}"
                                        placeholder="Your Name" id="userName">
                                </div>
                                <div class="col-6 my-3">
                                    <label for="userPhone">Phone</label>
                                    <input type="number" name="phone" class="form-control " value="{{ $admin->phone }}"
                                        placeholder="Your Phone" id="userPhone">
                                </div>
                                <div class="col-12 my-3">
                                    <label for="userEmail">Email</label>
                                    <input type="email" name="email" class="form-control " value="{{ $admin->email }}"
                                        placeholder="Your Email" id="userEmail">
                                </div>
                                <div class="col-6 my-3">
                                    <label for="userAddress">Address</label>
                                    <input type="text" name="address" class="form-control " value="{{ $admin->address }}"
                                        placeholder="Your Address" id="userAddress">
                                </div>
                                <div class="col-6 my-3">
                                    <label for="userGender">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="" @if ($admin->gender == null) selected @endif>I prefer not to
                                            say</option>
                                        <option value="Male" @if ($admin->gender == 'Male') selected @endif>Male</option>
                                        <option value="Female" @if ($admin->gender == 'Female') selected @endif>Female</option>
                                    </select>
                                </div>
                                <div class="col-6 my-3">
                                    <button class="btn btn-primary form-control" type="submit">Update</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
