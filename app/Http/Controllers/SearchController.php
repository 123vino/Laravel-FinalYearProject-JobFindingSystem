<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Post;

class SearchController extends Controller
{
    public function searchindex(){
      $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
      return view('company.searchindex',$data);
    }
    public function filterUser(Request $request){
      $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
      $skills = Skill::with('user')
      ->where('name', $request->skillName)
      ->where('rating', $request->skillLevel)
      ->get();

      return view('company.job.search',$data)->with('skills',$skills);
    }
    public function search2(Request $request){
      $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
      $skills = Skill::with('user')
      ->where('name', $request->skillName)
      ->where('rating', $request->skillLevel)
      ->get();
      return view('company.job.search2',$data)->with('skills',$skills);
    }
    public function search3(Request $request){
      $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
      $skills = Skill::with('user')
      ->where('name', $request->skillName)
      ->where('rating', $request->skillLevel)
      ->get();
      return view('company.job.search3',$data)->with('skills',$skills);
    }
    public function search4(Request $request){
      $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
      $skills = Skill::with('user')
      ->where('name', $request->skillName)
      ->where('rating', $request->skillLevel)
      ->get();
      return view('company.job.search4',$data)->with('skills',$skills);
    }

    public function nonregserach(Request $request){
     
      $posts = Post::query()
      ->where('salary', $request->salary)
      ->where('tags', $request->tags)
      ->where('location', $request->location)
      ->get();
      return view('company.job.nonregsearchresult')->with('posts',$posts);
    }
  //not in use
   public function regserach(Request $request){
     
      $posts = Post::query()
      ->where('salary', $request->salary)
      ->where('tags', $request->tags)
      ->where('location', $request->location)
      ->get();
      return view('home')->with('posts',$posts);
    }
  

    public function jobprofile($id){
      $posts = Post::find($id);
      return view('company.job.nonregjobprofile',compact('posts'));
  }
  public function jobprofile2($id){
    $posts = Post::find($id);
    return view('user.searchjobprofile',compact('posts'));
}
}
//127.0.0.1
