<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'file_name'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
