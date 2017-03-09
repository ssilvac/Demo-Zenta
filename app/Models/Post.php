<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'category_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
