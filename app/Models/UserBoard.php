<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserBoard
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $user_id
 * @property-read \FollicallyFeral\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\UserBoard whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\UserBoard whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\UserBoard whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\UserBoard whereUserId($value)
 * @mixin \Eloquent
 */
class UserBoard extends Model
{
    protected $table = 'user_board';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('FollicallyFeral\Models\user');
    }

        
}