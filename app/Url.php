<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false;

    protected $fillable = ['url', 'shortened'];

    public static function getUniqueShortUrl () {
		$shortened = str_random(5);

		if(self::whereShortened($shortened)->first()){
			return self::getUniqueShortUrl();
		}
		return $shortened;
	}
}
