<?php

namespace App\Transformers;

use App\Customers;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    /**
     * API formatter for the customer side.
     *
     * @param  Customers $customer
     * @return array
     */
    public function transform(Customers $customer)
    {
        // TODO: Implement departments relation. -> Create GH issue

        return [
            'id'      => (int)    $customer->id,
            'vat'     => (string) $customer->vat,
            'company' => (string) $customer->company,
            'name'    => (array) [
                'fname'   => (string) $customer->fname,
                'lname'   => (string) $customer->name,
                'name'    => (string) $customer->name . ' ' . $customer->fname
            ],
            'address' => (array) [
                'street'  => (string) $customer->street,
                'zipcode' => (string) $customer->zipcode,
                'city'    => (string) $customer->city,
                'state'   => (string) $customer->state,
                'country' => (string) $customer->country
            ],
            'contact' => (array) [
                'email'   => (string) $customer->email,
                'phone'   => (string) $customer->phone,
                'mobile'  => (string) $customer->mobile
            ]
        ];
    }
}