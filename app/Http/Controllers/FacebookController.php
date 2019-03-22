<?php

namespace App\Http\Controllers;
use Socialite;
use Google_Client;
use Google_Service_People;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Exception;
class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
    
        $existUser = User::where('email' ,$facebookUser->email)->first();
        //dd($facebookUser);
        
        try
        {
        if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $facebookUser->name;
                $user->email = $facebookUser->email;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } 
        catch (Exception $e) {
            return 'ooooooooooooooh error my friend you should work more hard';
        }
    }
}