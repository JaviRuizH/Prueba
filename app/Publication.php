<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table='publications';
    protected $fillable=['id_user','id_category','title','description'];

    public function users()
    {
    	return $this->belongsTo('App\User');
    }

    public function categories()
    {
    	return $this->belongsTo('App\Category');
    }
}
