<?php

namespace App\Models;
use App\Http\Controllers\PostController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['jobName', 'com_id','jobDescription','jobRequirements', 'tags','location', 'skillLevel', 'workExperience', 'education','salary','appDate','enddate'];

    public function company(){
        return $this->belongsTo(Company::class,'com_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'post_user')->withPivot(['user_id','post_id']);
    }

    public function checkApplication(){
        return \DB::table('post_user')->where('user_id',auth()->user()->id)
                                      ->where('post_id',$this->id)->exists();
       // $company=Company::find($post->company->id)->notify(new JobApplyNotification($post));
        //return view('company.dashboard',compact('company'));
                          
    }

     /**
     * Set the categories
     *
     */
    //public function setCategoryAttribute($value)
    //{
    //    $this->attributes['skillLevel'] = json_encode($value);
    //}

    /**
     * Get the categories
     *
     */
    //public function getCatgoryAttribute($value)
    //{
    //    return json_decode($value);
    //}

}
