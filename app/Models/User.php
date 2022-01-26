<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class User
 *
 * @property string $username
 * @property string $password
 * @property int $id
 *
 * @package App\Models
 */
class User  extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
	protected $table = 'users';

	protected $hidden = [
		'password',
        'remember_token',
	];

	protected $fillable = [
        'name',
		'email',
        'email_verified_at',
        'gender',
        'created_at',
        'updated_at',
		'password',
        'remember_token'
	];
}
