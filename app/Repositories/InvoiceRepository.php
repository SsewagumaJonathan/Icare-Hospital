<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Repositories\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:20 am UTC
*/

class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Patient_Name',
        'Title',
        'Description',
        'Status',
        'Amount',
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
        return Invoice::class;
    }
}
