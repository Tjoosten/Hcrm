<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WebSetupTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /setup
     *
     * @group all
     * @group setup
     */
    public function testSetup()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/setup')
            ->seeStatusCode(200);
    }

    /**
     * GET: /setup/ticketrouting
     *
     * @group all
     * @group setup
     */
    public function testTicketRouting()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/setup/ticketrouting')
            ->seeStatusCode(200);
    }

    /**
     * GET: /setup/ticketrouting/create
     *
     * @group all
     * @group setup
     */
    public function testTicketRoutingCreate()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/setup/ticketrouting/create')
            ->seeStatusCode(200);
    }

    /**
     * POST: /setup/ticketrouting/save
     *
     * @group all
     * @group setup
     */
    public function testTicketRoutingSave()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        // Inputs
        $input['type']           = 'Administration';
        $input['server']         = 'Myserver';
        $input['port']           = 443;
        $input['ssl']            = true;
        $input['fromName']       = 'test name';
        $input['fromAddress']    = 'test address';
        $input['password']       = 'password';
        $input['createTicket']   = 'meh';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/setup/ticketrouting/save', $input)
            ->seeInDatabase('InboundMailboxes', $input)
            ->seeStatusCode(302);
    }
}
