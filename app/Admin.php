<?php

namespace App;

// Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;
// Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;
// Notification for admin
use App\Notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{

	// This trait has notify() method defined
	use Notifiable;

    // Mass assignable attributes
    protected $fillable = [
    	'name', 'email', 'password',
    ];

    // Hidden attributes
    protected $hidden = [
    	'password', 'remember_token',
    ];

    // Send password reset notification
    public function sendPasswordResetNotification($token)
    {
    	$this->notify(new AdminResetPasswordNotification($token));
    }
}
