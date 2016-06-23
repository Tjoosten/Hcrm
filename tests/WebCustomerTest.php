<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WebCustomerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /customers
     *
     * @group all
     * @group customers
     */
    public function testIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/customers')
            ->seeStatusCode(200);
    }

    /**
     * GET: customers/search
     *
     * @group all
     * @group customers
     */
    public function testCustomerSearch()
    {
        $user     = factory(App\User::class)->create();
        $customer = factory(App\Customers::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/customers/search', ['term' => $customer->name])
            ->seeStatusCode(200);
    }

    /**
     * GET: /customer/create
     *
     * @group all
     * @group customers
     */
    public function testCustomerCreateView()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/customers/create')
            ->seeStatusCode('200');
    }

    /**
     * GET: /customer/destroy/{id}
     *
     * @group all
     * @group customers
     */
    public function testCustomerDestroy()
    {
        $user     = factory(App\User::class)->create();
        $customer = factory(App\Customers::class)->create();


        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('customers', ['id' => $customer->id])
            ->visit('/customer/destroy/' . $customer->id)
            ->dontSeeInDatabase('customers', ['id' => $customer->id])
            ->seeStatusCode(200);
    }

    /**
     * GET: /customer/update/{id}
     *
     * @group all
     * @group customers
     */
    public function testCustomerEditView()
    {
        $user     = factory(App\User::class)->create();
        $customer = factory(App\Customers::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/customer/update/' . $customer->id)
            ->see($customer->name)
            ->see($customer->fname)
            ->see($customer->street)
            ->see($customer->zipcode)
            ->see($customer->city)
            ->see($customer->state)
            ->see($customer->country)
            ->see($customer->email)
            ->see($customer->phone)
            ->see($customer->mobile)
            ->see($customer->company)
            ->see($customer->vat)
            ->seeStatusCode(200);
    }

    /**
     * POST: /customer/update/{id}
     * - without validation errors
     *
     * @group all
     * @group customers
     */
    public function testCustomerUpdateWithoutErrors()
    {
        // General
        $this->withoutMiddleware();

        $user     = factory(App\User::class)->create();
        $customer = factory(App\Customers::class)->create();

        // Old db
        $oldDb['name']    = $customer->name;
        $oldDb['fname']   = $customer->fname;
        $oldDb['zipcode'] = $customer->zipcode;
        $oldDb['city']    = $customer->city;
        $oldDb['state']   = $customer->state;
        $oldDb['country'] = $customer->country;
        $oldDb['email']   = $customer->email;
        $oldDb['mobile']  = $customer->mobile;
        $oldDb['phone']   = $customer->phone;
        $oldDb['company'] = $customer->company;
        $oldDb['vat']     = $customer->vat;

        // Input
        $input['name']    = 'Doe';
        $input['fname']   = 'John';
        $input['street']  = 'foorBar street';
        $input['zipcode'] = '2300';
        $input['city']    = 'Foobar city';
        $input['state']   = 'Antwerp';
        $input['country'] = 'belguim';
        $input['email']   = 'jhondoe@gmail.com';
        $input['mobile']  = '0000 00 00 00';
        $input['phone']   = '0000 00 00 00';
        $input['company'] = 'Idevelopment';
        $input['vat']     = 'vat number';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('customers', $oldDb)
            ->post('/customer/update/' . $customer->id)
            ->seeInDatabase('customers', $input)
            ->seeStatusCode(302);
    }

    /**
     * POST: /customer/update/{id}
     * - with validation errors
     *
     * @group all
     * @group customers
     */
    public function testCustomerUpdateWithErrors()
    {
        $this->withoutMiddleware();

        $user     = factory(App\User::class)->create();
        $customer = factory(App\Customers::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/customer/update/' . $customer->id)
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /customer/create
     * - without validation errors
     *
     * @group all
     * @group customers
     */
    public function testCustomerInsertWithoutErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $input['name']    = 'Doe';
        $input['fname']   = 'John';
        $input['street']  = 'foorBar street';
        $input['zipcode'] = '2300';
        $input['city']    = 'Foobar city';
        $input['state']   = 'Antwerp';
        $input['country'] = 'belguim';
        $input['email']   = 'jhondoe@gmail.com';
        $input['mobile']  = '0000 00 00 00';
        $input['phone']   = '0000 00 00 00';
        $input['company'] = 'Idevelopment';
        $input['vat']     = 'vat number';
        
        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/customer/create', $input)
            ->seeInDatabase('customers', $input)
            ->seeStatusCode(302);
    }

    /**
     * POST: /customer/create
     * - with validation errors
     *
     * @group all
     * @group customers
     */
    public function testCustomerInsertWithErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/customer/create', [])
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }
}
