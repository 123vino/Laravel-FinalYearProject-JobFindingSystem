<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Company;
use App\Models\User;
use App\Models\Post;
use App\Notifications\JobApplyNotification;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    public function comlogin()
    {
        return view('auth.comLogin');
    }  
    public function comRegistration()
    {
        return view('auth.comRegister');
    }

    public function save(Request $request){
        //validate request
        $request->validate([
            'comName'=>'required',
            'comRegNum'=>'required',
            'comAddress'=>'required',
            'comContact'=>'required',
            'comProfile'=>'required',
            'bussiNature'=>'required',
            'comEmail'=>'required|email|unique:companies',
            'password'=>'required|confirmed',

        ]);
        //insert data into database
        $company=new Company;
        $company->comName=$request->comName;
        $company->comRegNum=$request->comRegNum;
        $company->comAddress=$request->comAddress;
        $company->comContact=$request->comContact;
        $company->comProfile=$request->comProfile;
        $company->bussiNature=$request->bussiNature;
        $company->comEmail=$request->comEmail;
        $company->password=Hash::make($request['password']);
        $save=$company->save();

        if($save){
            return back()->with('success','Successfully Registered');

        }else{
            return back()->with('error','Something went wrong');
        }
    }

    public function check(Request $request){
        //validate requested input
        $request->validate([
            'comEmail'=>'required',
            'password'=>'required',
        ]);
       
        $userInfo = Company::where('comEmail','=',$request->comEmail)->first();
                            

        if(!$userInfo){
          return back()->with('error','We do not recognise your email address');
        }
        else{
            //check password
            if(Hash::check($request->password,$userInfo->password)){
               $request->session()->put('LoggedUser',$userInfo->id);
               return redirect('company/dashboard');

            }else{
               return back()->with('error','Incorrect Password');
            }
            
        }
    

    }
   
    public function comlogout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('auth/login');
        }
    }
    public function dashboard(){
       $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        //$company = Company::find(1);
        //Company::find(1)->notify(new JobApplyNotification);
       // $notifications = Session::has('LoggedUser');
        return view('company.dashboard',$data);
    }

    public function companyProfile($id){

        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $company = Company::find($id);
        return view('company.profile1',$data,compact('company'));
    }

    public function comUpdate(Request $request,$id){

        //insert data into database
         //$data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))];
         //$input = $request->all();
         //$data->comName=$request->comName;
        // $data->comRegNum=$request->comRegNum;
        // $data->comAddress=$request->comAddress;
        // $data->comContact=$request->comContact;
        // $data->comProfile=$request->comProfile;
        // $data->bussiNature=$request->bussiNature;
        // $data->comEmail=$request->comEmail;
        // $data->update($input);
      
     $company = Company::find($id);
     $input = $request->all();
     $company->update($input);
      return back()->with('success',' Profile Updated!');
        //if($data){
        //    return back()->with('success','Your profile details have been updated in the database');

        //}else{
        //    return back()->with('fail','Something went wrong');
        //}
    }
    public function jobindex(){
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        return view('company.job.category.index',$data);
    }
    public function applicantindex(){
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $applicants = Post::where('com_id','=',session('LoggedUser'))->get();
        return view('company.job.joblist',$data)->with('applicants',$applicants);
    }
  
    public function applicants($id){
       
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        $applicants = Post::find($id);
        return view('company.job.jobapplicants', compact('applicants'),$data);
        
    }
    public function userResume($id){
        $data= ['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];

        $users = User::find($id);
        return view('company.job.userResume', compact('users'),$data);

    }

    // Notification for applied job
    public function notify(Request $request){

        $post = DB::table('post_user')->find($request->post_id);  
        $company= Company::find($post->company->id)->notify(new JobApplyNotification($post));

        return view('company.dashboard',compact('company'));
        
        
    }
}

//'user_id',auth()->user()->id)




 