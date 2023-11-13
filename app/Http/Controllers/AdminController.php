<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("admin.homePage");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $admin = User::where("id",$id)->first();
        return view("admin.AccountDetail", compact("admin"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $admin = User::where("id",$id)->first();
        return view("admin.adminEditPage", compact("admin"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

       $this->validationCheck($request);
       $data = $this->getUserData($request);

       if(request()->hasFile("image")){
        $dbImage = User::where("id",$id)->first();
        $dbImage = $dbImage->image;
        if($dbImage != null){
            Storage::delete("public/".$dbImage);
        }

        $imageName = uniqid().$request->file("image")->getClientOriginalName();
        $request->file("image")->storeAs("public", $imageName);
        $data["image"] = $imageName;
       }

        User::where("id",$id)->update($data);

        return redirect()->route("admins.show",$id)->with("success","Account Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    //admin list

    public function adminList(){
        $admin = User::where("role","admin")->get();
        return view("admin.adminPage", compact("admin"));
    }

    //admin change password page

    public function changePasswordPage(){
        return view("admin.changePasswordPage");
    }


    //user


    //user page
    public function userPage(){

        $user = User::where("role","user")->get();
        return view("admin.userPage",compact("user"));
    }
    //user edit page

    public function userEdit($id){
        $user = User::where("id",$id)->first();
        return view("admin.userEditPage",compact("user"));

    }
    //user role change

    public function userRoleChange(Request $request){
        $result = User::where("id",$request->id)->update([
            "role"=> $request->role
        ]);

        return response()->json([$result,200]);
    }

    //user delete

    public function userDelete($id){
        User::where("id",$id)->delete();
        return redirect()->route("admin#userPage");
    }





    //company


    public function companyPage(){
        $company = User::where("role","company")->get();
        return view("admin.company",compact("company"));
    }

    //company edit

    public function companyEdit($id){
        $company = User::where("id",$id)->first();
        return view("admin.companyEditPage",compact("company"));
    }
    //company status change

    public function companyStatusChange(Request $request){
    $result = User::where("id",$request->id)->update([
        "status" => $request->status,
    ]);

    return response()->json([$result,200]);

    }

    //company status search

    public function companyStatusSearch(Request $request){


        if($request->companyStatus == null){
            $company = User::where("role","company")->get();
        }
        else{
            $company = User::where("status",$request->companyStatus)
                        ->where("role","company")->get();
        }

        return view("admin.company",compact("company"));
    }

    //validation check

    private function validationCheck($request){
        Validator::make($request->all(), [
            'name' => 'required|min:4|max:20|string',
            'email' => 'required|email',
            'phone' => 'required|min:9|max:15',
            'address' => 'required|min:2',
            'image' => 'file|mimes:png,jpg,jpeg,webp',
        ])->validate();
    }



    //get user data

    private function getUserData($request){
        return [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "address" => $request->address,
            "gender" => $request->gender,
        ];
    }
}
