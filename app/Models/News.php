<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title','desc','category_id','image'
    ];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
