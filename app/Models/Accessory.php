<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Accessory
 * 
 * @property int $id_as
 * @property string $name
 * @property string $price
 * @property string $path_img
 * @property int $type
 *
 * @package App\Models
 */
class Accessory extends Model
{
	protected $table = 'accessories';
	protected $primaryKey = 'id_as';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int'
	];

	protected $fillable = [
		'name',
		'price',
		'path_img',
		'type'
	];
}
