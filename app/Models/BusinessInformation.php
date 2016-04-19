<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusinessInformation
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $logo_path
 * @property string $email
 * @property string $phone
 * @property string $address
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation whereLogoPath($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\BusinessInformation whereAddress($value)
 * @mixin \Eloquent
 */
class BusinessInformation extends Model
{
    protected $table = 'business_information';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'logo_path',
        'email',
        'phone',
        'address'
    ];

    protected $guarded = [];

        
}