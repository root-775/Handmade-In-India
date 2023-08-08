<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'tag_name',
        'tag_slug',
        'tag_image_path',
        'tag_description',
        'status',
    ];
}
