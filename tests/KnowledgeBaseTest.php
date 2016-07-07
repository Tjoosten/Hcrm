<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class KnowledgeBaseTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /knowledge
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/knowledge')
            ->seeStatusCode(200);
    }

    /**
     * GET: /knowledge/search
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeSearch()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->get('/knowledge/search', ['term' => 'test parameter'])
            ->seeStatusCode(200);
    }

    /**
     * GET: /knowledge/edit/{id}
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeEditView()
    {
        $user       = factory(App\User::class)->create();
        $knowledge  = factory(App\Knowledge::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/knowledge/edit/' . $knowledge->id)
            ->seeStatusCode(200);
    }

    /**
     * GET: knowledge/destroy/{id}
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeItemDestroy()
    {
        $user      = factory(App\User::class)->create();
        $knowledge = factory(App\Knowledge::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('knowledge', ['id' => $knowledge->id])
            ->visit('/knowledge/destroy/' . $knowledge->id)
            ->dontSeeInDatabase('knowledge', ['id' => $knowledge->id])
            ->seeStatusCode(200);
    }

    /**
     * GET: knowledge/register
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeRegister()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/knowledge/register')
            ->seeStatusCode(200);
    }

    /**
     * GET: knowledge/question/{id}
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeSpecific()
    {
        $user      = factory(App\User::class)->create();
        $knowledge = factory(App\Knowledge::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/knowledge/question/' . $knowledge->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: knowledge/register
     * - without errors
     *
     * @group all
     * @group knowledge
     */
    public function testRegisterWithoutErrors()
    {
        $user      = factory(App\User::class)->create();
        $knowledge = factory(App\Knowledge::class)->create();
        $dbDataOld = ['question' => $knowledge->question, 'answer' => $knowledge->answer];

        $input['question'] = 'Question';
        $input['answer']   = 'Answer';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('knowledge', $dbDataOld)
            ->post('knowledge/register', $input)
            ->seeInDatabase('knowledge', $input)
            ->seeStatusCode(302);
    }

    /**
     * POST: /knowledge/register
     * - with errors
     *
     * @group all
     * @group knowledge
     */
    public function testRegisterWithErrors()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/knowledge/register', [])
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /knowledge/edit/{id}
     * - without errors
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeEditWithoutErrors()
    {
        $user      = factory(App\User::class)->create();
        $knowledge = factory(App\Knowledge::class)->create();
        $dbDataOld = ['question' => $knowledge->question, 'answer' => $knowledge->answer];

        $input['question'] = 'Question';
        $input['answer']   = 'Answer';
        

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('knowledge', $dbDataOld)
            ->post('/knowledge/edit/' . $knowledge->id, $input)
            ->dontSeeInDatabase('knowledge', $dbDataOld)
            ->seeInDatabase('knowledge', $input)
            ->seeStatusCode(302);
    }

    /**
     * POST: /knowledge/edit/{id}
     * - with errors
     *
     * @group all
     * @group knowledge
     */
    public function testKnowledgeEditWithErrors()
    {
        $user      = factory(App\User::class)->create();
        $knowledge = factory(App\Knowledge::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/knowledge/edit/' . $knowledge->id, [])
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

}
