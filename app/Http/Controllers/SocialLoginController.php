<?php

namespace App\Http\Controllers;

use App\User;
use Socialite;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the google authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        echo $user->getName();
        echo "<br>";
        echo $user->getEmail();
        echo "<br>";
        echo 'Đăng kí thành công !!!'.'<br>';

        $db_user = new User();
        $db_user->name = $user->getName();
        $db_user->email = $user->getEmail();
        $db_user->save();
        echo 'Lưu thông tin vào db thành công';
    }
}