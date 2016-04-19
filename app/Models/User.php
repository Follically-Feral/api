<?php

namespace FollicallyFeral\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * FollicallyFeral\Models\User
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $role
 * @property boolean $email_verified
 * @property string $email_verified_code
 * @property boolean $active
 * @property string $last_login
 * @property string $forename
 * @property string $surname
 * @property string $dob
 * @property string $country
 * @property string $website
 * @property string $avatar
 * @property string $twitter_username
 * @property string $facebook
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\FollicallyFeral\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereEmailVerified($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereEmailVerifiedCode($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereLastLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereForename($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereSurname($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereDob($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereTwitterUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereFacebook($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'password', 'email', 'role', 'active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function permissions() {
        return $this->belongsToMany('FollicallyFeral\Models\Permission', 'permission_assignment');
    }

    public function groups() {
        return $this->belongsToMany('FollicallyFeral\Models\Group', 'group_membership');
    }

}
