<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'content'
    ];

    public function scopeCategorySearch($query, $category_id){
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
        $query->where('content', 'like', '%' . $keyword . '%');
        }
    }
}