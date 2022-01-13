<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Background
 * 
 * @property int $id
 * @property string $name
 * @property string $path_image
 * @property string|null $title1
 * @property string|null $title2
 * @property string|null $title3
 * @property int $type
 *
 * @package App\Models
 */
class Background extends Model
{
	protected $table = 'background';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int'
	];

	protected $fillable = [
		'name',
		'path_image',
		'title1',
		'title2',
		'title3',
		'type'
	];
}
