<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumsFoto extends Model
{
    public $timestamps = false;

    public function getCategory(){
        return $this->belongsTo('App\AlbumsCategory', 'category_id', 'id');
    }
}
