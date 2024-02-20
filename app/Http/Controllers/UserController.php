<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserJobHuntStatus;
use App\Models\UserWorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view("User.homePage");
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
        $user = User::where("users.id",$id)->first();

        $userStatus = UserJobHuntStatus::where("user_id",$id)->first();
        $userWorkExperience = UserWorkExperience::where("user_id",$id)->get();
       
        return view("User.profilePage",compact("user","userStatus","userWorkExperience"));
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
}
