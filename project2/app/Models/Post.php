<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{    
    public function getOrderBy()
    {
        return $this->orderBy('updated_at', 'DESC')->get();
    }
}