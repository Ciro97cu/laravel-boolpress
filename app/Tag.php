<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "tags";

    protected $guarded = [];

    public function post()
    {
        return $this->belongsToMany("App\Post");
    }
}
