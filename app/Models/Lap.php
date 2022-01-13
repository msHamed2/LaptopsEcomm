<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lap
 *
 * @property int $id_lap
 * @property int $id_brand
 * @property string $name
 * @property string $price
 * @property string $type
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 *
 * @package App\Models
 */
class Lap extends Model
{
	protected $table = 'lap';
	protected $primaryKey = 'id_lap';
	public $timestamps = false;

	protected $casts = [
		'id_brand' => 'int'
	];
	protected $with=['specification','brand'];

	protected $fillable = [
		'id_brand',
		'name',
		'price',
		'type',
		'image1',
		'image2',
		'image3',
		'image4'
	];
	public function specification(){
	 return   $this->hasOne(Specification::class,'id_lap');
    }
    public function brand (){
	    return $this->belongsTo(Brand::class,'id_brand');
    }
}
