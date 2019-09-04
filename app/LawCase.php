<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawCase extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class) ;
    }
}
