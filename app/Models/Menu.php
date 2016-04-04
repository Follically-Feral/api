<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $placement
 * @property integer $module_section_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\MenuSubSection[] $subSections
 * @property-read \FollicallyFeral\Models\ModuleSection $moduleSection
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu wherePlacement($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereModuleSectionId($value)
 * @mixin \Eloquent
 * @property string $link
 * @property string $component
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereLink($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereComponent($value)
 * @property integer $component_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Menu whereComponentId($value)
 */
class Menu extends Model
{
    protected $table = 'menu';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'placement',
        'module_section_id'
    ];

    protected $guarded = [];

    public function subSections() {
        return $this->hasMany('FollicallyFeral\Models\MenuSubSection');
    }

    public function moduleSection() {
        return $this->belongsTo('FollicallyFeral\Models\ModuleSection');
    }

    public function component() {
        return $this->belongsTo('FollicallyFeral\Models\Component');
    }
    
}