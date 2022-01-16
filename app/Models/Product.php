<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function SubCategory()
    {
        return $this->belongsTo('App\Models\SubCategory', 'subcategory_id', 'id');
    }
    public function ReSubCategory()
    {
        return $this->belongsTo('App\Models\ResubCategory', 'subcategory_id', 'id');
    }
}
