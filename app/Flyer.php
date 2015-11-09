<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	/**
	 * fillable elements for tht Flyer.
	 * @return array
	 * @var fillable
	 **/
	protected $fillable = [
		'street',
		'city',
		'zip',
		'country',
		'state',
		'price',
		'description'
	];
	/**
	 * find the the flyer at given address
	 * @param  string $zip
	 * @param  string $street
	 */
	public static function locatedAt($zip, $street)
	{
		$street = str_replace('-', ' ', $street);
		return static::where(compact('zip', 'street'))->first();
	}
	public function getPriceAttribute($price)
	{
		return '$' . number_format($price);
	}
	/**
	 * Flyer is composed of many photos
	 *
	 * @return  \Illuminate\Database\Eloquent\Relations\HasMany
	 **/
    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }
    public function addPhoto($photo)
    {
    	return $this->photos()->save($photo);
    }
}
	