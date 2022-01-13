<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Offer
 * 
 * @property int $id_offer
 * @property string $name
 * @property string $content
 * @property string $price
 * @property string $path_img
 * @property int $type
 *
 * @package App\Models
 */
class Offer extends Model
{
	protected $table = 'offer';
	protected $primaryKey = 'id_offer';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int'
	];

	protected $fillable = [
		'name',
		'content',
		'price',
		'path_img',
		'type'
	];
}
