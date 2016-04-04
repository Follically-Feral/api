<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Project[] $projects
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Group whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Group whereDescription($value)
 * @mixin \Eloquent
 */
class Group extends Model
{
    protected $table = 'group';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('FollicallyFeral\Models\User', 'group_membership');
    }

    public function permissions() {
        return $this->belongsToMany('FollicallyFeral\Models\Permission', 'permission_assignment');
    }
        
}