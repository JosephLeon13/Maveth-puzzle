<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Trait
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    // Sends password reset emails
    use SendsPasswordResetEmails;

    // Shows form to request password reset
    public function showLinkRequestForm ()
    {
    	return view('admin.passwords.email');
    }

    // Password broker for Admin Model
    public function broker()
    {
    	return Password::broker('admin');
    }
}
