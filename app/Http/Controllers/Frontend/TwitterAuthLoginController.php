<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class TwitterAuthLoginController extends Controller
{
	public function redirectToTwitter()

	{
		
		$social= Socialite::driver('twitter')->redirect();
		return $social;
	}

			

	/**

	 * Create a new controller instance.

	 *

	 * @return void

	 */

	public function handleTwitterCallback()

	{

		 try {
			  $user = Socialite::driver('twitter')->user();
			  $finduser = User::where('twitter_id', $user->id)->first();
			  if($finduser){
					Auth::login($finduser);
					return redirect()->intended('dashboard');
			  }else{
					$newUser = User::updateOrCreate(['email' => $user->email],[
							  'first_name' => $user->name,
							  'twitter_id'=> $user->id,
						 ]);
					Auth::login($newUser);
					return redirect()->intended('dashboard');
			  }
		 } catch (\Throwable $th) {
			  dd($th->getMessage());

		 }

	}
}
