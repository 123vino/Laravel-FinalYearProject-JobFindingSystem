<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class ComRegController extends Controller
{
    public function index()
    {
        return view('auth.comLogin');
    }  
      
    public function companyLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('homeCompany')
                        ->withSuccess('Signed in');
        }
  
        return redirect("comLogin")->withSuccess('Login details are not valid');
    }

    public function comRegistration()
    {
        return view('auth.comRegister');
    }
      
    public function companyRegistration(Request $request)
    {  
        $request->validate([
            'comName' => ['required', 'string', 'max:255'],
            'comAddress' => ['required', 'string', 'max:255'],
            'comRegNum'=>['required','string'],
            'bussiNature'=>['required','string'],
            'comProfile'=>['required','string'],
            'comContact'=>['required','integer'],
            'comEmail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("homeCompany")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'firstName' => $data['firstName'],
        'lastName' => $data['lastName'],
        'gender' => $data['gender'],
        'age' => $data['age'],
        'address' => $data['address'],
        'mobileNo' => $data['mobileNo'],
        'email' => $data['email'],
        'password' =>  Hash::make($data['password']),
        
      ]);
    }    
    
    public function companyDashboard()
    {
        if(Auth::check()){
            return view('homeCompany');
        }
  
        return redirect("comLogin")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('comLogin');
    }
}
?>

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Company;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::JOB;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'comName' => ['required', 'string', 'max:255'],
            'comAddress' => ['required', 'string', 'max:255'],
            'comRegNum'=>['required','string'],
            'bussiNature'=>['required','string'],
            'comProfile'=>['required','string'],
            'comContact'=>['required','integer'],
            'comEmail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'address' => $data['address'],
            'mobileNo' => $data['mobileNo'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' =>$data['username'],
        ]);
    }

    
}
