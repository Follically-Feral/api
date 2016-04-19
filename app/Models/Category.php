<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $category_type_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Category whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Category whereCategoryTypeId($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $table = 'category';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'category_type_id'
    ];

    protected $guarded = [];

        
}