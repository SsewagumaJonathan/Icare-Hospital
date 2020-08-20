<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version March 13, 2020, 9:19 am UTC
 *
 * @property string Name
 * @property string Email
 * @property string|\Carbon\Carbon Email_verified_at
 * @property string Status
 * @property string Gender
 * @property string Role_Name
 * @property string City
 * @property string State
 * @property string Skills
 * @property string Password
 * @property string remember_token
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Status',
        'Gender',
        'Role_Name',
        'City',
        'State',
        'Skills',
        'Password',
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
        'Role_Name' => 'string',
        'City' => 'string',
        'State' => 'string',
        'Skills' => 'string',
        'Password' => 'string',
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
        'Password' => 'required'
    ];

    
}
