<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jesus extends Model
{
    use HasFactory;
    
        public function getExcerptAttribute()
    {
        return 0;
    }

}
