<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\authenticated;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Socialite;
use Google_Client;
use Google_Service_People;
use App\User;
use Auth;
use Exception;

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
//use authenticated;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
     /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
 
    public function redirectToProvider()
    {
        return Socialite::driver('google')->scopes(['profile','email'])->redirect();
    }

    public function handleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $existUser = User::where('email',$googleUser->email)->first();
        //dd($user);
       //return  $user->token;
        try
        {
        if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
//                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
             //   $user->avatar = $googleUser->avatar;
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } 
        catch (Exception $e) {
            return 'ooooooooooooooh error my friend you should work more hard';
        }
}



    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    

 public function authenticated(Request $request, $user)
    {
        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }
 


   /*

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() =>[
            'required','string',
            Rule::exists('users')->where(function($query){
              $query->where('status',true);

            })

            ],
            'password' => 'required|string',
            ],[


            $this->username().'.exists'=>'tne selected email invalid or you must avtivate account'
        ]);
    }*/
}
