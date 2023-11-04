<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

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

    //company status change

    public function companyStatusChange(Request $request){
    $result = User::where("id",$request->id)->update([
        "status" => $request->status,
    ]);

    return response()->json([$result,200]);

    }

    //company status search

    public function companyStatusSearch(Request $request){


        $company = User::where("status",$request->companyStatus)
                        ->where("role","company")->get();
        
        return view("admin.company",compact("company"));
    }
}
