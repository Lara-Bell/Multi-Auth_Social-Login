<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Laravel\Socialite\Facades\Socialite;

class SocialAccountController extends Controller
{

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $socialAccountService, $provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
        }
        // ERROR
        catch (\Exception $e){
            return redirect('/login');
        }

        $authUser = $socialAccountService->findOrCreate(
            $user,
            $provider
        );

        auth()->login($authUser, true);

        return redirect('/home');
    }
}
