<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class WebDepartmentsTest
 */
class WebDepartmentsTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /departments
     *
     * @group all
     * @group departments
     */
    public function testDepartments()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/departments')
            ->seeStatusCode(200);
    }

    /**
     * GET: /departments/search
     *
     * @group all
     * @group departments
     */
    public function testDepartmentSearch()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->get('/departments/search', ['term', 'name'])
            ->seeStatusCode(200);
    }

    /**
     * GET: /departments/show/{id}
     *
     * @group all
     * @group departments
     */
    public function testDepartmentShow()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/departments/show/' . $department->id);
    }

    /**
     * GET; /departments/new
     *
     * @group all
     * @group departments
     */
    public function testDepartmentNew()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/departments/new')
            ->seeStatusCode(200);
    }

    /**
     * GET: /departments/delete/{id}
     *
     * @group all
     * @group departments
     */
    public function testDepartmentDelete()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('departments', ['id' => $department->id])
            ->visit('/departments/delete/' . $department->id)
            ->dontSeeInDatabase('departments', ['id' => $department->id])
            ->seeStatusCode(200);
    }

    /**
     * POST: /departments/create
     * - without validation errors.
     *
     * @group all
     * @group departments
     */
    public function testInsertWithoutErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class, 3)->create();

        $input['name']        = 'Department name';
        $input['description'] = 'Deparment description';

        $this->actingAs($user[0])
            ->seeIsAuthenticatedAs($user[0])
            ->post('/departments/create', $input)
            ->seeStatusCode(302);
    }

    /**
     * POST: /departments/create
     * - With validation errors.
     *
     * @group all
     * @group departments
     */
    public function testInsertWIthErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/departments/create', [])
            ->assertHasOldInput();
    }

    /**
     * GET: /departments/update/{id}
     *
     * @group all
     * @group departments
     */
    public function testDepartmentUpdateView()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/departments/update/' . $department->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: /departments/update/{id}
     * - Without validation errors.
     *
     * @group all
     * @group departments
     */
    public function testUpdateWithoutValidationErrors()
    {
        $this->withoutMiddleware();

        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $input['name']        = 'Department name';
        $input['description'] = 'Deparment description';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/departments/update/' . $department->id, $input)
            ->seeStatusCode(302);
    }

    /**
     * POST: /departments/update/{id}
     * - With validation errors
     *
     * @group all
     * @group departments
     */
    public function testDepartmentUpdateWithErrors()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/departments/update/' . $department->id)
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }
}
