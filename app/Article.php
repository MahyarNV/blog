<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'demo', 'text'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
