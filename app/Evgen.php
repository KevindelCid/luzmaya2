<?php

namespace App;


use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    // protected $fillable = [
    //     'name', 'email', 'password','estado','tipo','descripcion_user','foto','dpi'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassNotification($token));
    }
}
