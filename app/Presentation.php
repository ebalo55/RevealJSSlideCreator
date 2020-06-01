<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presentation extends Model
{
    use SoftDeletes;

    protected $fillable = ['creator', 'reference', 'content', 'state'];

    public function getCreator() {
        return $this->belongsTo("\App\User", "creator");
    }
}
