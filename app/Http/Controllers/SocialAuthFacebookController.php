<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthFacebookController extends Controller
{
    /**
     * Create a redirect method to facebook api.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {

    }

    public function auth(Request $request) {
        $user = User::whereEmail($request->get('email'))->where('fbid', $request->get('id'))->first();

        if($user) {
            Auth::guard()->attempt($request->only('email','password'),true);
        } else {
            $user = User::create([
               'email' => $request->get('email'),
               'password' => bcrypt(env('APP_key'). rand(1, 1000)),
               'fbid' => $request->get('id'),
               'country_id' => '1', //TODO: get the true location when in prod mode
               'slug' => alphaID(time()),
               'firstname' => $request->get('first_name'),
               'lastname' => $request->get('last_name'),
               'username' => $request->get(Str::lower($request->get('first_name')))
            ]);
        }

        $type = '';

        switch($request->get('type')) {
            case 'facebook':
                $type = 'fbid';
                break;
            case 'google':
                $type = 'googleid';
        }

        return collect($user->toArray())->only(['email','firstname','username','lastname','slug', $type]);
    }
}
