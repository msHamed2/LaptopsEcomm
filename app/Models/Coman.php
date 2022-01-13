<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coman
 * 
 * @property int $id
 * @property string $reply
 * @property string $coment
 *
 * @package App\Models
 */
class Coman extends Model
{
	protected $table = 'comen';
	public $timestamps = false;

	protected $fillable = [
		'reply',
		'coment'
	];
}
