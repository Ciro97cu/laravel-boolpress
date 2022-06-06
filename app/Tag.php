<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "tags";

    public function post()
    {
        return $this->belongsToMany("App\Post");
    }
}
