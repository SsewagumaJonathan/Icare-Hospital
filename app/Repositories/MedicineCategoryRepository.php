<?php

namespace App\Repositories;

use App\Models\MedicineCategory;
use App\Repositories\BaseRepository;

/**
 * Class MedicineCategoryRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:21 am UTC
*/

class MedicineCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Categoty_Name',
        'Description',
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
        return MedicineCategory::class;
    }
}
