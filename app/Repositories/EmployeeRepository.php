<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:19 am UTC
*/

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Email',
        'Email_verified_at',
        'Status',
        'Gender',
        'Role_Name',
        'City',
        'State',
        'Skills',
        'Password',
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
        return Employee::class;
    }
}
