<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medicine
 * @package App\Models
 * @version March 13, 2020, 9:20 am UTC
 *
 * @property string Name
 * @property string Medicine_Categoty
 * @property string Description
 * @property string Status
 * @property string Company
 * @property number Price
 * @property string remember_token
 */
class Medicine extends Model
{
    use SoftDeletes;

    public $table = 'medicine';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Medicine_Categoty',
        'Description',
        'Status',
        'Company',
        'Price',
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
        'Medicine_Categoty' => 'string',
        'Description' => 'string',
        'Status' => 'string',
        'Company' => 'string',
        'Price' => 'float',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Medicine_Categoty' => 'required',
        'Description' => 'required',
        'Status' => 'required',
        'Company' => 'required',
        'Price' => 'required'
    ];

    
}
