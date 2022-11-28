<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function publishers(){
        return $this->belongsTo(publishers::class);
    }

    public function categories(){
        return $this->belongsToMany(categories::class, 'book_categories');
    }
}
