<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryType
 *
 * @property integer $id
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\CategoryType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\CategoryType whereName($value)
 * @mixin \Eloquent
 */
class CategoryType extends Model
{
    protected $table = 'category_type';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}