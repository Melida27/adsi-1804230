<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'image',
    	'content',
    	'user_id',
    	'category_id',
        'slider',
        'price'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function scopeNames($arts, $q){
        if(trim($q)){
            $arts->where('title', 'LIKE', "%$q%");
        }
    }
}
