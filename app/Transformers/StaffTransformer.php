<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

/**
 * Class StaffTransformer
 * @package App\Transformers
 */
class StaffTransformer extends TransformerAbstract
{
    /**
     * API formatter for the Staff side.
     *
     * @param  User $staff
     * @return array
     */
    public function transform(User $staff)
    {
        return [
            'name'  => (string) $staff->name,
            'email' => (string) $staff->email
        ];
    }
}