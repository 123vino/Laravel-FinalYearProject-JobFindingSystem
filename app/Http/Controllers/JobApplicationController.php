<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Company;
use DB;

class JobApplicationController extends Controller
{
    public function index(){
        $posts = Post::with('company')->paginate(5);
         return view('user.recentjobs',compact('posts'));
    }

    public function show($id){

        $jobs = Post::find($id);
       // $posts = Post::with('company')->get();
        return view('user.jobshow',compact('jobs'));
    }

    public function compro($id){
        $company = Company::find($id);
        return view('user.compro',compact('company'));
    }
    
    public function nonreguser($id){
        $company = Company::find($id);
         return view('user.nonregpro',compact('company'));
 
     }

     public function nonregshow($id){

        $jobs = Post::find($id);
       // $posts = Post::with('company')->get();
        return view('user.nonregjob',compact('jobs'));
    }

    public function myjobs($id){
        //$userjobs = User::where('post_id',auth()->user()->id);
        $userjobs = User::where('id',$id)->first();
        //dd($userjobs);
        return view('company.job.myjobs')->with('userjobs',$userjobs);
        //dd($userjobs->posts);
    }
    //user side viewing job
    public function destroy($id)
    {
        //$data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        //DB::table('post_user')->where('post_id',$id)->delete();
                  
        $post = DB::table('post_user')->where('post_id',$id)->delete();
        return back()->with('success','Job is deleted');
    }

}
