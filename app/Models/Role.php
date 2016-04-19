<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Role whereDescription($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    protected $table = 'role';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $guarded = [];

        
}