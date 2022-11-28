<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookCategory extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function categories(){
        return $this->belongsToMany(categories::class);
    }

    public function books(){
        return $this->belongsToMany(books::class);
    }
}
