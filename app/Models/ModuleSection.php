<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleSection
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $module_id
 * @property-read \FollicallyFeral\Models\Module $module
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Menu[] $menus
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSection whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSection whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSection whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSection whereModuleId($value)
 * @mixin \Eloquent
 */
class ModuleSection extends Model
{
    protected $table = 'module_section';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'module_id'
    ];

    protected $guarded = [];

    public function module() {
        return $this->belongsTo('FollicallyFeral\Models\Module');
    }

    public function menus() {
        return $this->hasMany('FollicallyFeral\Models\Menu');
    }

    public function permissions() {
        return $this->belongsToMany('FollicallyFeral\Models\Permission', 'module_section_access');
    }
        
}