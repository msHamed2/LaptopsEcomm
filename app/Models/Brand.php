<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 *
 * @property int $id_brand
 * @property string $name
 * @property string $path_image
 *
 * @package App\Models
 */
class Brand extends Model
{
	protected $table = 'brand';
	protected $primaryKey = 'id_brand';
	public $timestamps = false;
	protected $fillable = [
		'name',
		'path_image'
	];
	public function laptop(){
	    return $this->hasMany(Lap::class,'id_brand');
    }
}
