<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model\Relations\MorphOne;
use Illuminate\Database\Eloquent\Model\Relations\MorphMany;
use Illuminate\Database\Eloquent\Model\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image(): MorphMany
    {
        return $this->morphMany(Image::class,'imageable');
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

}
