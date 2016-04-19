<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Weight
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Weight whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Weight whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Weight whereType($value)
 * @mixin \Eloquent
 */
class Weight extends Model
{
    protected $table = 'weight';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'type'
    ];

    protected $guarded = [];

        
}