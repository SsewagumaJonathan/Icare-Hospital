<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Beds
 * @package App\Models
 * @version March 13, 2020, 9:18 am UTC
 *
 * @property string Bed_Number
 * @property string Bed_Type
 * @property string Description
 * @property string remember_token
 */
class Beds extends Model
{
    use SoftDeletes;

    public $table = 'beds';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Bed_Number',
        'Bed_Type',
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
        'Bed_Number' => 'string',
        'Bed_Type' => 'string',
        'Description' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Bed_Number' => 'required'
    ];

    
}
