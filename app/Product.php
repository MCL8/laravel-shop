<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'vendor_code',
        'category_id',
        'brand_name',
        'price',
        'description',
        'available',
        'recommended',
        'status'
    ];

    public static function getImage($id)
    {
        $noImage = 'noimage.png';

        $path = public_path('/images/products');

        $pathToImage = $path . $id . 'jpg';

        if (file_exists($pathToImage)) {
            return $pathToImage;
        }

        return $path . $noImage;
    }
}
