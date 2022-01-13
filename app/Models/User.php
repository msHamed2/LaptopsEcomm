<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property string $username
 * @property string $password
 * @property int $id
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password'
	];
}
