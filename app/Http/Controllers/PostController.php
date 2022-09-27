<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Company;
use App\Models\User;
use App\Http\Controllers\Auth; 
use App\Notifications\JobApplyNotification;
use Illuminate\Support\Facades\Notification;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $posts = Post::where('com_id','=',session('LoggedUser'))->get();
        return view('company.job.index',$data,compact('posts'));//->with('posts',$posts);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];

        return view('company.job.create',$data)->with('success','Job Post Created!');
    }
    public function create2()
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];

        return view('company.job.category.create2',$data)->with('success','Job Post Created!');
    }
    public function create3()
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];

        return view('company.job.category.create3',$data)->with('success','Job Post Created!');
    }
    public function create4()
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];

        return view('company.job.category.create4',$data)->with('success','Job Post Created!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $request->validate([//validate request
        'jobName'=>'required',
        'jobDescription'=>'required',
        'jobRequirements'=>'required',
        'location'=>'required',
        'skillLevel'=>'required',
        'workExperience'=>'required',
        'education'=>'required',
        'salary'=>'required',
        'tags'=>'required',
        'appDate'=>'required',
        'enddate'=>'required'
       ]);
       $skills = $request->skillLevel; //implode function
       $level = implode(',', $skills);
       $tags = $request->tags;
       $Tags = implode(',', $tags);
      // $softslevel = $request->softskills;
      // $slevel = implode(',', $softslevel);
        
       $user=User::all();
       $job=new Post;
       $job->jobName=$request->jobName;
       $job->jobDescription=$request->jobDescription;
       $job->jobRequirements=$request->jobRequirements;
       $job->location=$request->location;
       $job->skillLevel= $level ;
       $job->salary=$request->salary;
       $job->workExperience=$request->workExperience;
       $job->education=$request->education;
       $job->tags=$Tags;
       $job->com_id= Session::get('LoggedUser');
       $job->appDate=$request->appDate;
       $job->enddate=$request->enddate;

       
      // Notificaton::send($user,new JobApplyNotification($request->firstName));
       $save=$job->save();
       return back()->with('success','Job is succesfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $post = Post::find($id);
        return view('company.job.show',$data,compact('post'));//->with('posts',$post);
       // return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $post = Post::find($id);
        return view('company.job.edit',$data,compact('post'));
        //return $post;
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
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        return back()->with('success','Job Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $post = Post::find($id);
        $post->delete();
        return back()->with('success','Job is successfully deleted');
    }

  
}
