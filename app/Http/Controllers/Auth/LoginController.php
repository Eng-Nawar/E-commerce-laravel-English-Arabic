<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
       // $this->user = new User;
    }

    public function username(){
       
        return 'mobile';
    }
   /* public function login(Request $request)
    {
        // Check validation
        $this->validate($request, [
            'mobile' => ['required','regex:/[0-9]{10}/','digits:10'], 
            'password' => ['required', 'string', 'min:8', 'confirmed'],           
        ]);

     

        $credentials = $request->only('mobile', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');

      /*  // Get user record
        $user = User::where(['mobile'=> $request->get('mobile'),'password'=> $request->get('password')])->first();

        // Check Condition Mobile No. Found or Not
        if($request->get('mobile') != $user['mobile']) {
            \Session::put('errors', 'Your mobile number not match in our system..!!');
            return back();
        }        
        
        // Set Auth Details
        \Auth::login($user);
        
        // Redirect home page
        return redirect()->route('home');*/
}
