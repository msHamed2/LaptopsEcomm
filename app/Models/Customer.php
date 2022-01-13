<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $name_prodcut
 * @property string $problem
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customer';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'email',
		'name_prodcut',
		'problem'
	];
}
