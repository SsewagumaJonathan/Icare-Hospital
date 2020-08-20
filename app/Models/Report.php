<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Report
 * @package App\Models
 * @version March 13, 2020, 9:22 am UTC
 *
 * @property string Report_Type
 * @property string Date
 * @property string Doctor
 * @property string Patient
 * @property string Description
 * @property string remember_token
 */
class Report extends Model
{
    use SoftDeletes;

    public $table = 'reports';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Report_Type',
        'Date',
        'Doctor',
        'Patient',
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
        'Report_Type' => 'string',
        'Date' => 'date',
        'Doctor' => 'string',
        'Patient' => 'string',
        'Description' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Report_Type' => 'required'
    ];

    
}
