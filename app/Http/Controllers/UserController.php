<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Company;
use Auth; 

class UserController extends Controller
{
    public function landingpage(){
        $jobs = Post::latest()->limit(10)->get();
        $companies =Company::latest()->limit(12)->get();
        $allCompanies =Company::count();
        $allUsers=User::count();
        $allPosts = Post::count();
        return view('job',compact('jobs','companies','allPosts','allCompanies','allUsers'));

    }
 
    
    public function edit($id){
        //$data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $user= User::find($id);
        return view('user.profile',compact('user'));
       
       // $user=User::find($id);
       
        //if ($user){
        //return view('user.profile')->withUser($user);
        //}
       // else{
       //  return view('error.403');
        //} 
    }

    public function update(Request $request,$id){
          
       // auth()->user()->id;

         $user = User::find($id);
         $input = $request->all();
         $user->update($input);
         return back()->with('success',' Profile Updated!');
         // view('user.profile',compact('user'))
        // $user= auth()::findOrFail($user_id);
        // $user->firstName = $request->input('firstName');
        // $user->lastName = $request->input('lastName');
        // $user->gender = $request->input('gender');
        // $user->age= $request->input('age');
        // $user->address = $request->input('address');
        // $user->mobileNo = $request->input('mobileNo');
        // $user->email = $request->input('email');
 

         //User::where('id',$user_id)->update([
        //   'firstName'=>request('firstName'),
        //      'lastName'=>request('lastName'),
        //       'gender'=>request('gender'),
        //       'age'=>request('age'),
        //       'address'=>request('address'),
        //       'mobileNo'=>request('mobileNo'),
        //       'email'=>request('email'),
        // ]);
            //return redirect()->back()->with('message','Profile is updated');
    }
    public function myProfile(){
        return view('user.profile')->where('users',auth()->user());
    }

    public function profile($id){
      
        $user=User::find($id);
       
        if ($user){
        return view('user.profile')->withUser($user);
        }
        else{
         return back()->with('error','Profile is not found');
        }

    }

    public function profileUpdate(Request $request){
        $user_id = Auth::user()->id;
        $user= Auth::findOrFail($user_id);
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->gender = $request->input('gender');
        $user->age= $request->input('age');
        $user->address = $request->input('address');
        $user->mobileNo = $request->input('mobileNo');
        $user->email = $request->input('email');

    }

    public function apply(Request $request ,$id){
        $jobid = Post::find($id);
        $jobid->users()->attach(Auth::user()->id);
        return back()->with('success','Job Applied Succesfully');

    }
    
}
