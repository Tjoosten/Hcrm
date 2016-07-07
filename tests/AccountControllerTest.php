<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class AccountControllerTest
 */
class AccountControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /api/key/logs/{id}
     *
     * @group all
     * @group account
     */
    public function testApiLogs()
    {
        // TODO: write test
    }

    /**
     * GET: /account/update/{tab}
     *
     * @group all
     * @group account
     */
    public function testUpdateAccount()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/account/update/security')
            ->seeStatusCode(200)
            ->visit('/account/update/info')
            ->seeStatusCode(200)
            ->visit('/account/update/api')
            ->seeStatusCode(200)
            ->visit('/account/update/pointToNothing')
            ->seeStatusCode(200);
    }

    /**
     * GET: /account/api/removeKey/{id}
     *
     * @group all
     * @group account
     */
    public function testRemoveApiKey()
    {
        // TODO: write test
    }

    /**
     * POST: /account/update/password
     * - without validation errors.
     *
     * @group all
     * @group account
     */
    public function testUpdatePasswordWithoutErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $input['password'] = 'new password';
        $input['password_confirmation'] = 'new password';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('users', ['password' => $user->password])
            ->post('/account/update/password', $input)
            ->dontSeeInDatabase('users', ['password' => $user->password])
            ->seeStatusCode(302);
    }

    /**
     * POST: /account/update/password
     * - with validation errors
     *
     * @group all
     * @group account
     */
    public function testUpdatePasswordWithErrors()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/account/update/password', [])
            ->seeStatusCode(200);
    }

    /**
     * POST: /account/api/newKey
     * - without validation errors
     *
     * @group all
     * @group account
     */
    public function testApiNewKeyWithoutErrors()
    {
        $user  = factory(App\User::class)->create();
        $input = ['service' => 'Unit test'];

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/account/api/newKey', $input)
            ->seeInDatabase('api_keys', ['user_id' => $user->id, 'service' => $input['service']])
            ->dontSeeInDatabase('api_keys', ['key' => ''])
            ->seeStatusCode(302);
    }

    /**
     * POST: /account/api/newKey
     * - with validation errors
     *
     * @group all
     * @group account
     */
    public function testApiNewKeyWithErrors()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/account/api/newKey', [])
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /account/update/information
     * - with validation errors.
     *
     * @group all
     * @group account
     */
    public function testAccountUpdateInformationWithErrors()
    {
        $user = factory(App\User::class)->create();
        $data = ['name' => $user->name, 'email' => $user->email];

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('users', $data)
            ->post('/account/update/information', [])
            ->seeInDatabase('users', $data)
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /account/update/information
     * - without validation errors.
     *
     * @group all
     * @group account
     */
    public function testAccountUpdateInformationWithoutErrors()
    {
        $user = factory(App\User::class)->create();
        $data = ['name' => $user->name, 'email' => $user->email];

        $input['email'] = 'test@domain.tld';
        $input['name']  = 'firstname lastname';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('users', $data)
            ->post('/account/update/information', $input)
            ->dontSeeInDatabase('users', $data)
            ->seeInDatabase('users', $input)
            ->seeStatusCode(302);
    }
}
