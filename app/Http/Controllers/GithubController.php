<?php

namespace App\Http\Controllers;

use auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback(){
        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e){
            return redirect('login/github');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect('/home');
    }

    private function findOrCreateUser($githubUser){
        if ($authUser = User::where('github_id',
            $githubUser->id)->first()){
            return $authUser;
        }

        return User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_id' => $githubUser->github_id,
            'avatar' => $githubUser->avatar,
            'password' => encrypt('12345dummy'),
        ]);
    }
}
