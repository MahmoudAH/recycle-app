<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
      /* public function getEmail()
   {
       return view('auth.password');
   }
*/
   /**
    * Send a reset link to the given user.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   /*
   public function postEmail(Request $request)
   {
       $this->validate($request, ['email' => 'required|email']);

       $response = Password::sendResetLink($request->only('email'), function (Message $message) {
           $message->subject($this->getEmailSubject());

       });

       switch ($response) {
           case Password::RESET_LINK_SENT:
               return redirect()->back()->with('status', trans($response));

           case Password::INVALID_USER:
               return redirect()->back()->withErrors(['email' => trans($response)]);
       }
   }

   /**
    * Get the e-mail subject line to be used for the reset link email.
    *
    * @return string
    *
   protected function getEmailSubject()
   {
       return isset($this->subject) ? $this->subject : 'Your Password Reset Link';
   }

   /**
    * Display the password reset view for the given token.
    *
    * @param  string  $token
    * @return \Illuminate\Http\Response
    *
   public function getReset($token = null)
   {
       if (is_null($token)) {
           throw new NotFoundHttpException;
       }

       return view('auth.reset')->with('token', $token);
   }

   /**
    * Reset the given user's password.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    *
   public function postReset(Request $request)
   {
       $this->validate($request, [
           'token' => 'required',
           'email' => 'required|email',
           'password' => 'required|confirmed',
       ]);

       $credentials = $request->only(
           'email', 'password', 'password_confirmation', 'token'
       );

       $response = Password::reset($credentials, function ($user, $password) {
           $this->resetPassword($user, $password);
       });

       switch ($response) {
           case Password::PASSWORD_RESET:
               return redirect($this->redirectPath());

           default:
               return redirect()->back()
                           ->withInput($request->only('email'))
                           ->withErrors(['email' => trans($response)]);
       }
   }

   /**
    * Reset the given user's password.
    *
    * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
    * @param  string  $password
    * @return void
    *
   protected function resetPassword($user, $password)
   {
       $user->password = bcrypt($password);

       $user->save();

       Auth::login($user);
   }

   /**
    * Get the post register / login redirect path.
    *
    * @return string
    *
   public function redirectPath()
   {
       if (property_exists($this, 'redirectPath')) {
           return $this->redirectPath;
       }

       return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
   }*/
}
