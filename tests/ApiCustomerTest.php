<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Chrisbjr\ApiGuard\Models\ApiKey;

class ApiCustomerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET:  /api/v1/customers
     * CURL: curl --header "X-Authorization: <key>" <url>
     *
     * @group all
     * @group api
     * @group customers
     */
    public function testApiCustomerIndex()
    {
        $this->withoutMiddleware();
        $apiKey = factory(ApiKey::class)->create();
        $headers['X-Authorization'] = $apiKey->key;
        
        $valid = $this->get('/api/v1/customers', $headers);
        $valid->seeStatusCode(200);
    }
}
