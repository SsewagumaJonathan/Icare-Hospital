<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version March 13, 2020, 9:21 am UTC
 *
 * @property string Patient_Name
 * @property string|\Carbon\Carbon Payment_Date
 * @property time Time
 * @property string Transaction_id
 * @property integer invoice_id
 * @property number Amount
 * @property string Payment_Method
 * @property string Description
 * @property string remember_token
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Patient_Name',
        'Payment_Date',
        'Time',
        'Transaction_id',
        'invoice_id',
        'Amount',
        'Payment_Method',
        'Description',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Patient_Name' => 'string',
        'Payment_Date' => 'datetime',
        'Transaction_id' => 'string',
        'invoice_id' => 'integer',
        'Amount' => 'float',
        'Payment_Method' => 'string',
        'Description' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Patient_Name' => 'required',
        'Payment_Date' => 'required',
        'Time' => 'required',
        'Transaction_id' => 'required',
        'invoice_id' => 'required',
        'Amount' => 'required',
        'Payment_Method' => 'required',
        'Description' => 'required'
    ];

    
}
