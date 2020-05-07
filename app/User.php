<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password', 'role', 'phone','file'
=======
        'name', 'email', 'password', 'role', 'phone'
>>>>>>> parent of 95aa891e... Merge branch 'master' of https://github.com/dzakwanzaky/kursusOnline
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user(){
        return $this->hasOne('App\ModelJadwal', 'murid_id');
    }

    public function tutor(){
        return $this->hasOne('App\ModelJadwal', 'tutor_id');
    }

    public function data()
    {
    	return $this->hasOne('App\ModelTutor', 'id');
    }

    public function dataa()
    {
    	return $this->hasOne('App\ModelSiswa', 'id');
    }
}
