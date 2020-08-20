<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 * @package App\Models
 * @version March 13, 2020, 9:23 am UTC
 *
 * @property string Skill_Name
 * @property integer employee_id
 * @property string Start_Date
 * @property string Employee_History
 * @property string Skill_Level
 * @property string|\Carbon\Carbon Interviewed_Date
 * @property string Interviewed_Status
 * @property string Score
 * @property string remember_token
 */
class Skill extends Model
{
    use SoftDeletes;

    public $table = 'skills';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Skill_Name',
        'employee_id',
        'Start_Date',
        'Employee_History',
        'Skill_Level',
        'Interviewed_Date',
        'Interviewed_Status',
        'Score',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Skill_Name' => 'string',
        'employee_id' => 'integer',
        'Start_Date' => 'date',
        'Employee_History' => 'string',
        'Skill_Level' => 'string',
        'Interviewed_Date' => 'datetime',
        'Interviewed_Status' => 'string',
        'Score' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Skill_Name' => 'required'
    ];

    
}
