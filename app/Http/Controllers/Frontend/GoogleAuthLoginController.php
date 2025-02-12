<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthLoginController extends Controller
{
   public function redirect() {
		return Socialite::driver('google')->redirect();
	}
   public function callback_google() {
		
		try {
			$google_user = Socialite::driver('google')->user();

			$user = User::where('google_id',$google_user->getId())->first();
			if(!$user){
				// $new_user= User::create([
				// 	'first_name' => $google_user->getName(),
				// 	'email' => $google_user->getEmail(),
				// 	'google_id' => $google_user->getId(),
				// ]);
				$new_user = User::updateOrCreate(['email' => $google_user->getEmail()],[
					'first_name' => $google_user->getName(),
					'google_id' => $google_user->getId(),
			  ]);
				Auth::login($new_user);
				return redirect()->intended('dashboard');
			}else{

				Auth::login($user);
				return redirect()->intended('dashboard');
			}
		} catch (\Throwable $th) {
			dd('something went wrong'.$th->getMessage());
		}
	}
}
