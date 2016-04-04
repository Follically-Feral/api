<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * FollicallyFeral\Models\Component
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $path
 * @property string $component_path
 * @property string $component_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Menu[] $menus
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\MenuSubSection[] $menuSubSections
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\MenuSubSectionItem[] $menuSubSectionItems
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Component whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Component whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Component whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Component wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Component whereComponentPath($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Component whereComponentName($value)
 * @mixin \Eloquent
 */
class Component extends Model
{
    protected $table = 'component';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'path',
        'component_path',
        'component_name'
    ];

    protected $guarded = [];

    public function menus() {
        return $this->hasMany('FollicallyFeral\Models\Menu');
    }

    public function menuSubSections() {
        return $this->hasMany('FollicallyFeral\Models\MenuSubSection');
    }

    public function menuSubSectionItems() {
        return $this->hasMany('FollicallyFeral\Models\MenuSubSectionItem');
    }

}
