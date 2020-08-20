<?php

namespace App\Repositories;

use App\Models\Report;
use App\Repositories\BaseRepository;

/**
 * Class ReportRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:22 am UTC
*/

class ReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Report_Type',
        'Date',
        'Doctor',
        'Patient',
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
        return Report::class;
    }
}
