<?php

namespace App\Http\Controllers\Auth;
use DB;
use URL;
use Mail;
use App\User;
use App\VerifyUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Events\activateAccount;
use Auth;
use App\Jobs\SendVerificationEmail;


class RegisterController extends Controller
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
     *1
     * @var string
     */
    protected $redirectTo = '/admin';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required|string|min:6|confirmed',

           // 'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

            'city'=> 'required',
        'phone' => 'required|regex:/(01)[0-9]{9}/|size:11',
        //'phone'=> ['required',new validPhone],
        ],
       $messages = [
    'phone.required' => 'Unsupported phone number. ',
    'phone.regex' => 'Unsupported phone number. ',

]


//$validator = Validator::make($input, $rules, $messages);

        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']) ,          
            'city' => $data['city'],
            'phone' => $data['phone'],
            'verifyToken' => Str::random(40),
              ]);

           $verifyUser = VerifyUser::create([
            'user_id' => auth()->user()->id,
            'token' =>  sha1(time()),
        ]);
 
       // Mail::to(Auth::user()->email)->send(new activateEmail($user));
        return $user;
      //return  $verifyUser;


    }
     public function verifyUser($token)
    {
        $user = User::where('verifyToken', $token)->first();
        if(isset($user) ){
            //$user = $user->user;
            if(!$user->verified) {
                $user->verified = 1;
                $user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
 
        return redirect('/login')->with('status', $status);
    }
/*
 public function register(Request $request) {
      $input = $request->all();
      $validator = $this->validator($input);

      if ($validator->passes()){
        $user = $this->create($input)->toArray();
        $user['link'] = str_random(30);

        DB::table('verify_users')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);

        //Mail::send('emails.activation', $user, function($message) use ($user){
          //$message->to($user['email']);
          //$message->subject('www.hc-kr.com - Activation Code');
        //});
       //dd($user);
      
      /* Mail::send('emails.activation', $user, function($message) use($user){
            $message->to($user['email'])->subject('Activation Code');      
              });
        return redirect()->to('login')->with('success',"We sent activation code. Please check your mail.");
      
          }

      return back()->with('errors',$validator->errors());
    }

    public function userActivation($token){
      $check = DB::table('verify_users')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        if ($user->status ==1){
          return redirect()->to('login')->with('success',"user are already actived.");

        }
        $user->update(['status' => 1]);
        DB::table('verify_users')->where('token',$token)->delete();
        return redirect()->to('login')->with('success',"user active successfully.");
      }
      return redirect()->to('login')->with('Warning',"your token is invalid");
    }




       /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
   
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        event(new activateAccount($user));
      //$user->notify(new ActivateEmail($user));

        //return redirect('/login')
          // ->with('status','Registered. Please check your email to activate your account.');
           return redirect()->route('login')->with('message', 'Registered successfully!.. Please check your email to activate your account.!');
   }

}
