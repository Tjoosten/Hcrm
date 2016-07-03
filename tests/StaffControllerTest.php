<?php

use App\Traits\MailTracking;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StaffControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions, MailTracking;

    /**
     * GET: /staff/create
     *
     * @group all
     * @group staff
     */
    public function testRegisterView()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/staff/create')
            ->seeStatusCode(200);
    }

    /**
     * GET: /staff/destroy/{id}
     *
     * @group all
     * @group staff
     */
    public function testDestroyStaff()
    {
        $user = factory(App\User::class, 2)->create();

        $this->actingAs($user[0])
            ->seeIsAuthenticatedAs($user[0])
            ->seeInDatabase('users', ['name' => $user[1]->name])
            ->visit('/staff/destroy/' . $user[1]->id)
            ->dontSeeInDatabase('users', ['name' => $user[1]->name])
            ->seeStatusCode(200);
    }

    /**
     * POST: /staff/create
     * - Without validation errors.
     *
     * @group all
     * @group staff
     */
    public function testStaffInsertwitoutErrors()
    {
        $this->withoutMiddleware();

        // Factories
        $user        = factory(App\User::class)->create(['id' => 1]);
        $departments = factory(App\Departments::class)->create(['id' => 1]);

        // Input fields.
        $input['name']        = 'Jhon Doe';
        $input['email']       = 'JhonDoe@domain.tld';
        $input['departments'] = [ $departments->id ];

        // Database validation
        $userDb = ['name' => $input['name'], 'email' => $input['email']];

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/staff/create', $input)
            ->seeInDatabase('users', $userDb)
            ->dontSeeInDatabase('users', ['password' => ''])
            ->seeEmailWasSent()
            ->seeEmailSubject('Your staff account has been created')
            ->seeEmailTo($input['email'])
            ->seeStatusCode(302);
    }

    /**
     * POST: /staff/create
     * - With validation errors.
     *
     * @group all
     * @group staff
     */
    public function testStaffInsertWithErrors()
    {
        $this->withoutMiddleware();

        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/staff/create', [])
            ->seeEmailWasNotSent()
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }
}
