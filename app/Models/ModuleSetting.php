<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleSetting
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $property
 * @property integer $module_id
 * @property-read \FollicallyFeral\Models\Module $module
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSetting whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSetting whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSetting whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSetting whereProperty($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\ModuleSetting whereModuleId($value)
 * @mixin \Eloquent
 */
class ModuleSetting extends Model
{
    protected $table = 'module_setting';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'property',
        'module_id'
    ];

    protected $guarded = [];

    public function module() {
        return $this->belongsTo('FollicallyFeral\Models\Module');
    }

        
}