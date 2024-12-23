<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'short_desc', 'type', 'semester', 'request_status'];

    public function attachments()
    {
        return $this->hasMany(PostAttachment::class);
    }
}
