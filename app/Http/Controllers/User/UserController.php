<?php

namespace App\Http\Controllers\User;

use App\Contracts\Crudable;
use App\Contracts\Paginable;
use App\Contracts\Searchable;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserEditRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UserController
 *
 * @package App\Http\Controllers\User
 */
class UserController extends Controller
{
    /**
     * @var Crudable
     */
    protected $crud;

    /**
     * @var Searchable
     */
    protected $search;

    /**
     * @var Paginable
     */
    protected $page;

    /**
     * Create instance UserController
     *
     * @param Crudable   $crud
     * @param Paginable  $page
     * @param Searchable $search
     */
    public function __construct(Crudable $crud, Paginable $page, Searchable $search)
    {
        $this->crud = $crud;
        $this->page = $page;
        $this->search = $search;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->page->getByPage(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserCreateRequest $request
     *
     * @return mixed
     */
    public function store(UserCreateRequest $request)
    {
        return $this->crud->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return $this->crud->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserEditRequest   $request
     * @param                   $id
     *
     * @return mixed
     */
    public function update(UserEditRequest $request, $id)
    {
        return $this->crud->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->crud->delete($id);
    }
}
