<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;



class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {


            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();


            if($existUser) {
              $existUser->isUser();
                Auth::login($existUser);
                  return redirect(route('user_dashboard'));
              //  Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->role = "user";
                $user->email_verified_at = nullable();
                $user->password = md5(rand(1,10000));
                $user->remember_token = rememberToken();
                $user->created_at = timestamps();

                $user->save();
                //Auth::loginUsingId($user->id);
                $user->isUser();
                  Auth::login($user);
                    return redirect(route('user_dashboard'));


            }
            //return redirect()->to('/home');
        }
        catch (Exception $e) {
            return 'error';
        }
    }
}
