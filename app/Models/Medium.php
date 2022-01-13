<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medium
 * 
 * @property int $id
 * @property int $type
 * @property string|null $title
 * @property string $content
 *
 * @package App\Models
 */
class Medium extends Model
{
	protected $table = 'media';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int'
	];

	protected $fillable = [
		'type',
		'title',
		'content'
	];
}
