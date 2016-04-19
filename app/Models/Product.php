<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $usage_description
 * @property string $price
 * @property integer $star_rating
 * @property boolean $active
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product whereUsageDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product whereStarRating($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Product whereActive($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'usage_description',
        'price',
        'star_rating',
        'active'
    ];

    protected $guarded = [];

        
}