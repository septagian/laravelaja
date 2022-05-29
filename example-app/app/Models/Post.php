<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable= [
        'category_id',
        'user_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'Published_at'
    ];

    public function Category()
    {
        return $this->belongsTo( Category::class, 'category_id' );
    }

    public function user()
    {
        return $this->belongsTo( User::class,);
    }
    



}
