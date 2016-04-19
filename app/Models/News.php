<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property integer $user_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\News whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\News whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\News whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\News whereUserId($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    protected $table = 'news';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    protected $guarded = [];

        
}