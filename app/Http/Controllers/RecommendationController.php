<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Notifications\JobApplyNotification;

class RecommendationController extends Controller
{
    public function index(Request $request){

        $post = DB::table('post_user')->find($request->post_id);  
        Company::find($post->company->id)->notify(new JobApplyNotification($post));
        
        return back()->with('success','Applied the job successfully');

       
    }
}
