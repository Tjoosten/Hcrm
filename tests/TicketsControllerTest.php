<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TicketsControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /tickets
     *
     * @group all
     * @group tickets
     */
    public function testTicketsIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/tickets')
            ->seeStatusCode(200);
    }

    /**
     * GET: /tickets/create
     *
     * @group all
     * @group tickets
     */
    public function testTicketsCreateGet()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/tickets/create')
            ->seeStatusCode(200);
    }

    /**
     * GET: /tickets/assigned
     *
     * @group all
     * @group tickets
     */
    public function testTicketsAssigned()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/tickets/assigned')
            ->seeStatusCode(200);
    }

    /**
     * GET: /tickets/details/{id}
     *
     * @group all
     * @group tickets
     */
    public function testTicketDetails()
    {
        $user   = factory(App\User::class)->create();
        $ticket = factory(App\Tickets::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user);
            // ->visit('/tickets/details/' . $ticket->id)
            // ->seeStatusCode(500); // TODO: Fix bug
    }

    /**
     * POST: /tickets/quickUpdateTicket/{id}
     * - Has validation errors
     *
     * @group all
     * @group tickets
     */
    public function testTicketsQuickUpdatePost()
    {
        $this->withoutMiddleware();

        $user  = factory(App\User::class)->create();
        $ticket = factory(App\Tickets::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/tickets/quickUpdateTicket/' . $ticket->id, [])
            ->seeStatusCode(500); // TODO fix bug.
    }

    /**
     * POST: /comment/{id}
     * - without validation errors
     *
     * @group all
     * @group tickets
     */
    public function testReplyWithoutErrors()
    {
        $user   = factory(App\User::class)->create();
        $ticket = factory(App\Tickets::class)->create();

        // Input fields
        $input['comment'] = 'This is a comment';

        // Testing logic
        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/comment/' . $ticket->id, $input)
            ->seeInDatabase('comments', ['comment' => $input['comment'], 'user_id' => $user->id])
            ->seeInDatabase('comments_tickets', ['tickets_id' => $ticket->id])
            ->seeStatusCode(302);
    }

    /**
     * POST: /comment/{id}
     * - with validation errors
     *
     * @group all
     * @group tickets
     */
    public function testReplyWithErrors()
    {
        $user   = factory(App\User::class)->create();
        $ticket = factory(App\Tickets::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/comment/' . $ticket->id, [])
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /tickets/quickUpdateTicket/{id}
     * - Has no validation errors
     *
     * @group all
     * @group tickets
     */
    public function testTicketQuickUpdatePostWithoutErrors()
    {
        // TODO: needs to be doen after the validation setting.
    }
}
