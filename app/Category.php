<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'sort_order'
    ];

    public static function getArrayList()
    {
        $categoriesArray = [];

        $categories = Category::select('id', 'name')->get();

        foreach ($categories as $category) {
            $categoriesArray[$category->id] = $category->name;
        }

        return $categoriesArray;
    }
}
