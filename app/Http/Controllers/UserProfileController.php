<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $user= User::find($id)->with('skills','education','experience');
        return view('company.job.usershow',compact('user'));
    }
    public function showdetail($id){
        
        $users= User::find($id);
        //$users = auth()->user()->details;
        return view('user-detail.index',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        return view('user.profile1',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->gender = $request->input('gender');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        $user->mobileNo= $request->input('mobileNo');
        $user->email = $request->input('email');
       // $user->tags = $request->input('tags');
        $user->summary= $request->input('summary');
        $user->update();
        return back()->with('success',' Your profile is Updated!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //https://bootdey.com/img/Content/avatar/avatar7.png
}
