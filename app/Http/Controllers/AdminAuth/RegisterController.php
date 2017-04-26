<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Validator facade used in validator method
use Illuminate\Support\Facades\Validator;
//Admin Model
use App\Admin;
// Auth facade used in guard
use Auth;

class RegisterController extends Controller
{

	protected $redirectPath = 'admin_home';
	
	// Show registration form to administrator
    public function showRegistrationForm()
    {
    	return view('admin.auth.register');
    }

    // Handles registration request for administrator
    public function register(Request $request)
    {

    	// Validates data
    	$this->validator($request->all())->validate();

    	// Create Administrator
    	$admin = $this->create($request->all());

    	// Authenticate administrator
    	$this->guard()->login($admin);

    	// Redirect Administrator
    	return redirect($this->redirectPath);
    }

    // Validates user's input
    protected function validator(array $data)
    {
    	return Validator::make($data, [
    		'name' => 'required|max:255',
    		'email' => 'required|email|max:255|unique:admins',
    		'password' => 'required|min:6|confirmed'
    	]);
    }

    // Create a new admin instance after validation
    protected function create(array $data)
    {
    	return Admin::create([
    		'name' => $data['name'],
    		'email' => $data['email'],
    		'password' => bcrypt($data['password']),
    	]);
    }

    // Get the guard to authenticate the Admin
    protected function guard()
    {
    	return Auth::guard('web_admin');
    }
}
