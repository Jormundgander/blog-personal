<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;
use App\Category;


class Post extends Model
{
	protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'slug',
        'excerpt',
        'body',
        'file',
        'status'
    ];
	
	public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
