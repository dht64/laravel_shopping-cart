<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

use Session;
use Auth;

class UserController extends Controller
{
    //
    public function getSignup()
    {
    	return view('user.signup');
    }

    public function postSignup(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4',
    	]);

    	$user = new User([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    	]);

    	$user->save();

    	Auth::login($user);

        // restore last user's url
        if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
        }

    	return redirect()->route('user.profile');
    }

    public function getSignin()
    {
    	return view('user.signin');
    }

    public function postSignin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required',
    	]);

    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // retore last user's url
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
    		return redirect()->route('user.profile');
    	}

    	return redirect()->back();
    }

    public function getProfile()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
    	return view('user.profile', ['orders' => $orders]);
    }

    public function getLogout()
    {
    	Auth::logout();
    	return redirect()->route('user.signin');
    }
}
