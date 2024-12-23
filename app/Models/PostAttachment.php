<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostAttachment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'file_path', 'file_type'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
