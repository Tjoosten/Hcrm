<?php

namespace App\Http\Controllers\ApiV1;

use App\Knowledge;
use App\Transformers\KnowledgeTransformer;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

/**
 * Class KnowledgeController
 * @package App\Http\Controllers\ApiV1
 */
class KnowledgeController extends ApiGuardController
{

    /**
     * Validation rules.
     *
     * @var array
     */
    protected $validation;

    /**
     * KnowledgeController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Validation rules
        $this->validation['question'] = 'required';
        $this->validation['answer']   = 'required';
    }

    /**
     * Display a listing of the resource.
     *
     * @url    GET: api/v1/knowledge
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Knowledge::paginate(15);
        return $this->response->withPaginator($items, new KnowledgeTransformer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @url    POST: api/v1/knowledge
     * @param  \Illuminate\Http\Request  $input
     * @return \Illuminate\Http\Response
     */
    public function store(Request $input)
    {
        $validator = Validator::make($input->all(), $this->validation);

        if ($validator->fails()) {
            return $this->response->errorWrongArgs();
        }

        if (Knowledge::create($input->all())) {
            return $this->response->withArray(trans('knowledge.apiNew'));
        } else {
            return $this->response->errorUnprocessable();
        }
    }

    /**
     * Display the specified resource.
     *
     * @url    GET: api/v1/knowledge/{knowledge}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        try {
            $knowledgeItem = Knowledge::findOrFail($id);
            return $this->response->withItem($knowledgeItem, new KnowledgeTransformer);
        } catch(ModelNotFoundException $err) {
            return $this->response->errorNotFound();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @url    PUT|PATCH: api/v1/knowledge/{knowledge}
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = null)
    {
        $knowledgeItem = Knowledge::find($id);

        if (count($knowledgeItem) === 1) {
            $validator = Validator::make($request->all(), $this->validation);

            if ($validator->fails()) {
                return $this->response->errorWrongArgs();
            }

            if ($knowledgeItem->update($request->all())) {
                return $this->response->withArray(trans('knowledge.apiUpdate'));
            } else {
                return $this->response->errorUnprocessable();
            }

        } else {
            return $this->response->errorNotFound();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @url    DELETE: api/v1/knowledge/{knowledge}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null)
    {
        $knowledgeItem = Knowledge::find($id);

        if (count($knowledgeItem) > 0) {
            $knowledgeItem->delete();
            return $this->response->withArray(['message' => trans('knowledge.apiDestroy')]);
        } else {
            return $this->response->errorNotFound();
        }
    }
}
