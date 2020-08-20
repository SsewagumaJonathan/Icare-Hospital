<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BedAllotment
 * @package App\Models
 * @version March 13, 2020, 9:17 am UTC
 *
 * @property string Bed_Number
 * @property integer patients_id
 * @property string Allotment_Type
 * @property string|\Carbon\Carbon Discharge_Time
 * @property string remember_token
 */
class BedAllotment extends Model
{
    use SoftDeletes;

    public $table = 'bedallotment';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Bed_Number',
        'patients_id',
        'Allotment_Type',
        'Discharge_Time',
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
        'patients_id' => 'integer',
        'Allotment_Type' => 'string',
        'Discharge_Time' => 'datetime',
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
