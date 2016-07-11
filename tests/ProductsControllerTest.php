<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductsControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /products
     *
     * @group all
     * @group products
     */
    public function testProductsIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/products')
            ->seeStatusCode(200);
    }

    /**
     * POST: /products/category/new
     * - With validation errors
     *
     * @group all
     * @group products
     */
    public function testNewCategoryWithErrors()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/products/category/new', [])
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /products/category/new
     * - Without validation errors.
     *
     * @group all
     * @group products
     */
    public function testNewCategoryWithoutErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $input['category']    = 'category name';
        $input['description'] = 'category description';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/products/category/new', $input)
            ->seeInDatabase('products_categories', $input)
            ->seeStatusCode(302);
    }
}
