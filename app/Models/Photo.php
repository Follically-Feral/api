<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $path
 * @property boolean $for_gallery
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Photo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Photo whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Photo whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Photo wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Photo whereForGallery($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    protected $table = 'photo';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'path',
        'for_gallery'
    ];

    protected $guarded = [];

        
}