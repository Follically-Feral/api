<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Module
 *
 * @property integer $id
 * @property string $key
 * @property string $name
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\ModuleSetting[] $moduleSettings
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\ModuleSection[] $moduleSections
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Module whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Module whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Module whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Module whereDescription($value)
 * @mixin \Eloquent
 */
class Module extends Model
{
    protected $table = 'module';

    public $timestamps = false;

    protected $fillable = [
        'key',
        'name',
        'description'
    ];

    protected $guarded = [];

    public function moduleSettings() {
        return $this->hasMany('FollicallyFeral\Models\ModuleSetting');
    }

    public function moduleSections() {
        return $this->hasMany('FollicallyFeral\Models\ModuleSection');
    }

        
}