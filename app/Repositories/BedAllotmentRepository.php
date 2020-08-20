<?php

namespace App\Repositories;

use App\Models\BedAllotment;
use App\Repositories\BaseRepository;

/**
 * Class BedAllotmentRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:17 am UTC
*/

class BedAllotmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Bed_Number',
        'patients_id',
        'Allotment_Type',
        'Discharge_Time',
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
        return BedAllotment::class;
    }
}
