<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Config;
use Lang;
use App\User;

class UserController extends Controller
{
	public function create(Request $request){
		$this->validate($request, [
			'name'		=>	'required|unique:users',
			'email'		=>	'required|unique:users',
			'password'	=>	'required',
			'image'		=> 	'required|image|mimes:jpg,jpeg,bmp,gif,png|max:'.Config::get('app.photo_max_size')
		]);

		$nameImage = str_replace(' ', '_', $request->input('name')).'.'.$request->file('image')->extension();
		$request->file('image')->move(Config::get('app.url_image_user'), $nameImage);

		$newUser = User::create([
			'name'	=> $request->input('name'),
			'email'	=> $request->input('email'),
			'password'	=> bcrypt($request->input('password')),
			'image'		=> $nameImage,
			'is_admin'	=> 	false
		]);
		$newUser->save();

		return redirect('/')->with('send', Lang::get('auth.user_create'));
	}
}
