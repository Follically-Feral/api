<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SubCategory
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $category_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\SubCategory whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\SubCategory whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\SubCategory whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\SubCategory whereCategoryId($value)
 * @mixin \Eloquent
 */
class SubCategory extends Model
{
    protected $table = 'sub_category';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'category_id'
    ];

    protected $guarded = [];

        
}