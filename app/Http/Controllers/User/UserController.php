<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserEditRequest;
use App\Repositories\User\UserRepository;
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
     * @var UserRepository
     */
    protected $user;

    /**
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
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
        return $this->user->getByPage(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
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
        return $this->user->create($request->all());
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
        return $this->user->find($id);
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
        return $this->user->update($id, $request->all());
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
        return $this->user->delete($id);
    }
}
