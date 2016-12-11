<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User', 'username', 'username');
    }

    public function car()
    {
    	return $this->belongsTo('App\Car', 'vin', 'vin');
    }

    public static $create_validation_rules = [
        'vin' => 'required|unique:cars',
        'year' => 'required',
        'make' => 'required',
        'model' => 'required'
    ];   
}
