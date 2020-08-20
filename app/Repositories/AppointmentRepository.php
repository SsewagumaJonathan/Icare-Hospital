<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\BaseRepository;

/**
 * Class AppointmentRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:17 am UTC
*/

class AppointmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Disease',
        'Doctors',
        'Date',
        'Time',
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
        return Appointment::class;
    }
}
