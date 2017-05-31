<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumsCategory extends Model
{	
	public function images()
    {
    	return $this->hasMany('App\AlbumsFoto', 'id_category', 'id');
    }

    public $timestamps = false;
}
