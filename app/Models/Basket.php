<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Basket
 *
 * @property integer $id
 * @property integer $user_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Basket whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Basket whereUserId($value)
 * @mixin \Eloquent
 */
class Basket extends Model
{
    protected $table = 'basket';

    public $timestamps = false;

    protected $fillable = [
        'user_id'
    ];

    protected $guarded = [];

        
}