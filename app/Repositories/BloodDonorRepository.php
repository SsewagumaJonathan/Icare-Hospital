<?php

namespace App\Repositories;

use App\Models\BloodDonor;
use App\Repositories\BaseRepository;

/**
 * Class BloodDonorRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:19 am UTC
*/

class BloodDonorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Gender',
        'Age',
        'Address',
        'Blood_Group',
        'Donate_Date',
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
        return BloodDonor::class;
    }
}
