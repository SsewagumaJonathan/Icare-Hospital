<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BloodDonor
 * @package App\Models
 * @version March 13, 2020, 9:19 am UTC
 *
 * @property string Name
 * @property string Email
 * @property string|\Carbon\Carbon Email_verified_at
 * @property string Gender
 * @property string Age
 * @property string Address
 * @property string Blood_Group
 * @property string|\Carbon\Carbon Donate_Date
 * @property string remember_token
 */
class BloodDonor extends Model
{
    use SoftDeletes;

    public $table = 'blooddonors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Gender',
        'Age',
        'Address',
        'Blood_Group',
        'Donate_Date',
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
        'Gender' => 'string',
        'Age' => 'string',
        'Address' => 'string',
        'Blood_Group' => 'string',
        'Donate_Date' => 'datetime',
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
