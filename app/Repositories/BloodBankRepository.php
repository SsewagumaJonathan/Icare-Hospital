<?php

namespace App\Repositories;

use App\Models\BloodBank;
use App\Repositories\BaseRepository;

/**
 * Class BloodBankRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:18 am UTC
*/

class BloodBankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Blood_Group',
        'Status',
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
        return BloodBank::class;
    }
}
