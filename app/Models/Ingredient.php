<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $weight_amount
 * @property integer $weight_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Ingredient whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Ingredient whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Ingredient whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Ingredient wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Ingredient whereWeightAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Ingredient whereWeightId($value)
 * @mixin \Eloquent
 */
class Ingredient extends Model
{
    protected $table = 'ingredient';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'price',
        'weight_amount',
        'weight_id'
    ];

    protected $guarded = [];

        
}