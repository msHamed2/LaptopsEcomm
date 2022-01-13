<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Specification
 *
 * @property int $id_sp
 * @property int $id_lap
 * @property string $processor
 * @property string $ram
 * @property string $hard
 * @property string $graphics_card
 * @property string|null $dvd_wiriter
 * @property string $screen_size
 * @property string $battery
 * @property string $color
 * @property string|null $other_features
 *
 * @package App\Models
 */
class Specification extends Model
{
	protected $table = 'specifications';
	protected $primaryKey = 'id_sp';
	public $timestamps = false;

	protected $casts = [
		'id_lap' => 'int'
	];

	protected $fillable = [
		'id_lap',
		'processor',
		'ram',
		'hard',
		'graphics_card',
		'dvd_wiriter',
		'screen_size',
		'battery',
		'color',
		'other_features'
	];
    public function lap(){
      return  $this->belongsTo(Lap::class,'id_lap');
    }
}
