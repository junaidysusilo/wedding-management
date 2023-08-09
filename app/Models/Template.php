<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'tags_templates');
    }
}
