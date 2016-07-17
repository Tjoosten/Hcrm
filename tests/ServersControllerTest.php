<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ServersControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /servers
     *
     * @group all
     * @group servers
     */
    public function testIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/servers')
            ->seeStatusCode(200);
    }

    /**
     * GET: /servers/destroy/{id}
     *
     * @group all
     * @group servers
     */
    public function testDelete()
    {
        $user   = factory(App\User::class)->create();
        $server = factory(App\Servers::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('servers', ['id' => $server->id])
            ->visit('/servers/destroy/' . $server->id)
            ->dontSeeInDatabase('servers', ['id' => $server->Id])
            ->seeStatusCode(200);
    }

    /**
     * GET: /servers/create
     *
     * @group all
     * @group servers
     */
    public function testCreateView()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/servers/create')
            ->seeStatusCode(200);
    }
}
