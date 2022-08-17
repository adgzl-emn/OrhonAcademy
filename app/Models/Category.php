<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{
    public function BlogCount(){
        return  $this->hasMany(Blog::class,'category_id','id')->count();
        //modelındekı     category id sutunundakıı  idlerı   count et
    }

    use HasFactory;
}
