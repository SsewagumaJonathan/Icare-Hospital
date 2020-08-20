<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Appointment
 * @package App\Models
 * @version March 13, 2020, 9:17 am UTC
 *
 * @property string Name
 * @property string Email
 * @property string|\Carbon\Carbon Email_verified_at
 * @property string Disease
 * @property string Doctors
 * @property string Date
 * @property string|\Carbon\Carbon Time
 * @property string Phone_Number
 */
class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Disease',
        'Doctors',
        'Date',
        'Time',
        'Phone_Number'
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
        'Disease' => 'string',
        'Doctors' => 'string',
        'Date' => 'date',
        'Time' => 'datetime',
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
        'Email' => 'required'
    ];

    
}
