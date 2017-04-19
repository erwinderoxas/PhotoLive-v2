<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
class redirectController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        //return Socialite::driver('github')->redirect();
        // return Socialite::driver('github')
        //     ->scopes(['scope1', 'scope2'])->redirect();

        return Socialite::driver('github')
            ->scopes(['203010123089210', '30c0b5513c8b69476ccc666e4aa7a718'])->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        return Socialite::driver('facebook')->stateless()->user();
        //$user = Socialite::driver('github')->user();

        // OAuth Two Providers
        $token = $user->token;
        $refreshToken = $user->refreshToken; // not always provided
        $expiresIn = $user->expiresIn;

        // OAuth One Providers
        $token = $user->token;
        $tokenSecret = $user->tokenSecret;

        // All Providers
        $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
    }
}
