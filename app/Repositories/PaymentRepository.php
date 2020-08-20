<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\BaseRepository;

/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:21 am UTC
*/

class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Patient_Name',
        'Payment_Date',
        'Time',
        'Transaction_id',
        'invoice_id',
        'Amount',
        'Payment_Method',
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
        return Payment::class;
    }
}
