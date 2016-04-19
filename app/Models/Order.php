<?php

namespace FollicallyFeral\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property integer $id
 * @property integer $invoice_number
 * @property integer $tracking_number
 * @property string $total
 * @property integer $user_id
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Order whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Order whereTrackingNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Order whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\FollicallyFeral\Models\Order whereUserId($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    protected $table = 'order';

    public $timestamps = false;

    protected $fillable = [
        'invoice_number',
        'tracking_number',
        'total',
        'user_id'
    ];

    protected $guarded = [];

        
}