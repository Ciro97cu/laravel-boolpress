<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    protected $guarded = [];

    public static function generateSlug($title)
    {
        $slug = Str::slug($title);
        $alternativeSlug = $slug;
        $postFound = Post::where("slug", $slug)->first();
        $counter = 1;
        while ($postFound) {
            $alternativeSlug = $slug . "_" . $counter;
            $counter++;
            $postFound = Post::where("slug", $alternativeSlug)->first();
        }
        return $alternativeSlug;
    }
}
