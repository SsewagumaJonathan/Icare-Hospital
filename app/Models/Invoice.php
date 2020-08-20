<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 * @package App\Models
 * @version March 13, 2020, 9:20 am UTC
 *
 * @property string Patient_Name
 * @property string Title
 * @property string Description
 * @property string Status
 * @property number Amount
 * @property string remember_token
 */
class Invoice extends Model
{
    use SoftDeletes;

    public $table = 'invoice';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Patient_Name',
        'Title',
        'Description',
        'Status',
        'Amount',
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
        'Title' => 'string',
        'Description' => 'string',
        'Status' => 'string',
        'Amount' => 'float',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Patient_Name' => 'required',
        'Title' => 'required',
        'Description' => 'required',
        'Status' => 'required',
        'Amount' => 'required'
    ];

    
}
