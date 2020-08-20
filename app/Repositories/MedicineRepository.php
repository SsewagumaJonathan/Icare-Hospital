<?php

namespace App\Repositories;

use App\Models\Medicine;
use App\Repositories\BaseRepository;

/**
 * Class MedicineRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:20 am UTC
*/

class MedicineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Medicine_Categoty',
        'Description',
        'Status',
        'Company',
        'Price',
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
        return Medicine::class;
    }
}
