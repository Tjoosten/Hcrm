<?php

namespace App\Transformers;

use App\Departments;
use League\Fractal\TransformerAbstract;

/**
 * Class DepartmentTransformer
 * @package App\Transformers
 */
class DepartmentTransformer extends TransformerAbstract
{
    /**
     * Include the formatters for the relationships.
     *
     * @var array
     */
    protected $defaultIncludes = ['Users', 'Managers'];

    /**
     * API formatter for the customer side.
     *
     * @param Departments $department
     * @return array
     */
    public function transform(Departments $department)
    {
        return [
            // Contains information about the department.
            'information' => (array) [
                'name'        => (string) $department->name,
                'description' => (string) $department->description,
            ],
        ];
    }

    /**
     * Include Managers
     *
     * @param Departments $department
     * @return \League\Fractal\Resource\Collection
     */
    public function IncludeManagers(Departments $department)
    {
        $managers = $department->managers;
        return $this->collection($managers, new StaffTransformer);
    }

    /**
     * Include Users;
     *
     * @param  Departments $department
     * @return \League\Fractal\Resource\Collection
     */
    public function IncludeUsers(Departments $department)
    {
        $users = $department->users;
        return $this->collection($users, new StaffTransformer);
    }
}