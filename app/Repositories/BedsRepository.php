<?php

namespace App\Repositories;

use App\Models\Beds;
use App\Repositories\BaseRepository;

/**
 * Class BedsRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:18 am UTC
*/

class BedsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Bed_Number',
        'Bed_Type',
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
        return Beds::class;
    }
}
