<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable =['title', 'body', 'blog_image'];

    public function user(){
        return belongsTo('App\Models\User');
    }
}
