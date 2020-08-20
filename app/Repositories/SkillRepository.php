<?php

namespace App\Repositories;

use App\Models\Skill;
use App\Repositories\BaseRepository;

/**
 * Class SkillRepository
 * @package App\Repositories
 * @version March 13, 2020, 9:23 am UTC
*/

class SkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Skill_Name',
        'employee_id',
        'Start_Date',
        'Employee_History',
        'Skill_Level',
        'Interviewed_Date',
        'Interviewed_Status',
        'Score',
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
        return Skill::class;
    }
}
