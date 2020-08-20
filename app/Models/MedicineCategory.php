<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MedicineCategory
 * @package App\Models
 * @version March 13, 2020, 9:21 am UTC
 *
 * @property string Categoty_Name
 * @property string Description
 * @property string remember_token
 */
class MedicineCategory extends Model
{
    use SoftDeletes;

    public $table = 'medicinecategory';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Categoty_Name',
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
        'Categoty_Name' => 'string',
        'Description' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Categoty_Name' => 'required'
    ];

    
}
