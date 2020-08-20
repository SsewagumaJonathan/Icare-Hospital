<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:21 am UTC
*/

class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Status',
        'Gender',
        'Address',
        'Disease',
        'Age',
        'Date_of_Birth',
        'Blood_Group',
        'Phone_Number',
        'remember_token'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Patient::class;
    }
}
