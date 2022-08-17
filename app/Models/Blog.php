<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Blog extends Model
{

    public function GetCategory(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }


    use SoftDeletes;
    use HasFactory;
}
