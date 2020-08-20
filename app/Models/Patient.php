<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 * @package App\Models
 * @version March 13, 2020, 9:21 am UTC
 *
 * @property string Name
 * @property string Email
 * @property string|\Carbon\Carbon Email_verified_at
 * @property string Status
 * @property string Gender
 * @property string Address
 * @property string Disease
 * @property string Age
 * @property string Date_of_Birth
 * @property string Blood_Group
 * @property string Phone_Number
 * @property string remember_token
 */
class Patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Status',
        'Gender',
        'Address',
        'Disease',
        'Age',
        'Date_of_Birth',
        'Blood_Group',
        'Phone_Number',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Email' => 'string',
        'Email_verified_at' => 'datetime',
        'Status' => 'string',
        'Gender' => 'string',
        'Address' => 'string',
        'Disease' => 'string',
        'Age' => 'string',
        'Date_of_Birth' => 'string',
        'Blood_Group' => 'string',
        'Phone_Number' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Email' => 'required',
        'Blood_Group' => 'required',
        'Phone_Number' => 'required'
    ];

    
}
