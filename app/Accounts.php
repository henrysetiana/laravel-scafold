<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $accountidentifier
 * @property string $account_name
 * @property string $glacct_id
 * @property string $glacct_name
 * @property string $currency
 * @property string $created_date
 * @property string $updated_date
 * @property string $account_type
 * @property float $balance
 */
class Accounts extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'accountidentifier', 'account_name', 'glacct_id', 'glacct_name', 'currency', 'created_date', 'updated_date', 'account_type', 'balance'];

}
