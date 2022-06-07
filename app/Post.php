<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "posts";

    // protected $fillable = ['title', 'content', 'slug', 'category_id',];
    protected $guarded = [""];

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

    public function category()
    {
        return $this->belongsTo("App\Category");
    }

    public function tag()
    {
        return $this->belongsToMany("App\Tag");
    }
}
