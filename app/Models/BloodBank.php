<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BloodBank
 * @package App\Models
 * @version March 13, 2020, 9:18 am UTC
 *
 * @property string Blood_Group
 * @property string Status
 * @property string remember_token
 */
class BloodBank extends Model
{
    use SoftDeletes;

    public $table = 'bloodbank';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Blood_Group',
        'Status',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Blood_Group' => 'string',
        'Status' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Blood_Group' => 'required',
        'Status' => 'required'
    ];

    
}
