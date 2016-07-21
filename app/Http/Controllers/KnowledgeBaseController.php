<?php

namespace App\Http\Controllers;

use App\Knowledge;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class KnowledgeBaseController
 * @package App\Http\Controllers
 */
class KnowledgeBaseController extends Controller
{
    // TODO: Setup PHPUnit tests.
    // TODO: Setup the show method view.

    /**
     * KnowledgeBaseController constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
    }

    /**
     * The index view for all the knowledge questions.
     *
     * @url    GET: /knowledge
     * @url    GET: /knowledge/search
     * @param  Request $input the input collection bag.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $input)
    {
        $term = $input->get('term');

        if (! $term) {
            $data['questions'] = Knowledge::paginate(15);
        } else {
            $data['questions'] = Knowledge::where('question', 'LIKE', "%$term%")
                ->paginate(15);
        }

        return view('knowledge.index', $data);
    }

    /**
     * Delete a knowledge question.
     *
     * @url    GET: /knowledge/destroy/{id}
     * @param  int $id The question is in the database
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Knowledge::destroy($id);
        session()->flash('message', 'Item deleted');

        return redirect()->back();
    }

    /**
     * View for create a new Knowledge question
     *
     * @url    GET: /knowledge/register
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('knowledge.create');
    }

    /**
     * Store a new question.
     *
     * @url    POST: /knowledge/register
     * @param  Requests\KnowledgeBaseValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\KnowledgeBaseValidator $input)
    {
        Knowledge::create($input->except('_token'));
        session()->flash('message', 'Question and answer are stored');

        return redirect()->back();
    }

    /**
     * Edit a FAQ question view.
     *
     * @url    GET: /knowledge/edit/{id}
     * @param  int $id the question id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['question'] = Knowledge::find($id);
        return view('knowledge.edit', $data);
    }

    /**
     * Update a knowledge question.
     *
     * @url    POST: /knowledge/edit/{id}
     * @param  Requests\KnowledgeBaseValidator $input
     * @param  int $id The database id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\KnowledgeBaseValidator $input, $id)
    {
        Knowledge::find($id)->update($input->except('_token'));
        session()->flash('message', 'Question ans answer are updated');

        return redirect()->back();
    }

    /**
     * Show a specific question from the knowledge base.
     *
     * @url    GET: /knowledge/question/{id}
     * @param  int $id the question id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['question'] = Knowledge::find($id);
        return view('knowledge.show', $data);
    }
}
