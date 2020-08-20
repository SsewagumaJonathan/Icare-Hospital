<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Department
 * @package App\Models
 * @version March 13, 2020, 9:24 am UTC
 *
 * @property string Department_Name
 * @property string Date_Created
 * @property string remember_token
 */
class Department extends Model
{
    use SoftDeletes;

    public $table = '_departments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Department_Name',
        'Date_Created',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Department_Name' => 'string',
        'Date_Created' => 'date',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Department_Name' => 'required'
    ];

    
}
