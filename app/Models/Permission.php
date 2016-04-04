<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $delete
 * @property boolean $edit
 * @property boolean $view
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Group[] $groups
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\ModuleSection[] $moduleSections
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereDelete($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereEdit($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereView($value)
 * @mixin \Eloquent
 * @property boolean $add
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Permission whereAdd($value)
 */
class Permission extends Model
{
    protected $table = 'permission';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'delete',
        'edit',
        'view'
    ];

    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('FollicallyFeral\Models\User', 'permission_assignment');
    }

    public function groups() {
        return $this->belongsToMany('FollicallyFeral\Models\Group', 'permission_assignment');
    }

    public function moduleSections() {
        return $this->belongsToMany('FollicallyFeral\Models\ModuleSection', 'module_section_access');
    }

        
}