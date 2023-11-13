@extends("admin.master")

@section("content")
<div class="content-header">
    <div class="container-fluid">
        <h3 class="text-center mt-3">Admin Change Password Page</h3>

        <div class="container  mt-5 bg-white  ">
            <div class="row">
                <div class="col-7">

                   <div class="ms-5 mt-4">
                    <div class="">
                        <i class="fa-solid fa-lock rounded-icon fs-5 p-3"></i>
                    </div>
                    <div class=" my-3">
                        <h5 class="text-dark fw-bolder">Change Password</h5>
                    </div>
                    <p class="text-muted">
                        Lorem Ipsum is simply dummy text of the printing and ndard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining es
                    </p>
                    <div class="">
                        <label for="currentPassword"> Current Password</label>
                        <div class="passwordInput">
                            <i class="fa-solid fa-lock iconForInput "></i>
                            <input type="password" name="currentPassword" class="form-control">
                        </div>
                    </div>
                   </div>

                </div>
                <div class="col-5  bg-dark">
                    Hello
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
