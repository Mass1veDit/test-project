<?php

namespace App\Modules\Admin\Role\Controllers;

use App\Modules\Admin\Role\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Dashboard\Classes\Base;
use App\Modules\Admin\Role\Requests\RoleRequest;
use App\Modules\Admin\Role\Services\RoleService;

class RoleController extends Base
{
    public function __construct(RoleService $roleService)
    {
        parent::__construct();
        $this->service=$roleService;
    }
    public function index()
    {
        $this->authorize('view',Role::class);

        $roles = Role::all();
        $this->title = "Управление ролями";
        $this->content = view('Admin::Role.index')
            ->with([
                'roles' => $roles,
                'title'=>$this->title
            ])
            ->render();
        return $this->renderOutPut();
    }


    public function create()
    {
        $this->authorize('create',Role::class);

        $this->title = "Создание новой роли";
        $this->content = view('Admin::Role.create')
            ->with([
                'title'=>$this->title
            ])
            ->render();
        return $this->renderOutPut();
    }


    public function store(RoleRequest $request)
    {
        $this->service->save($request,new Role());

        return \Redirect::route('roles.index')->with([
            'message'=>__('Success')
        ]);
    }


    public function show(Role $role)
    {
        //
    }


    public function edit(Role $role)
    {
        $this->authorize('edit',Role::class);

        $this->title = "Изменение роли";
        $this->content = view('Admin::Role.edit')
            ->with([
                'title'=>$this->title,
                'item'=>$role,
            ])
            ->render();
        return $this->renderOutPut();
    }


    public function update(RoleRequest $request, Role $role)
    {
        $this->service->save($request,$role);

        return \Redirect::route('roles.index')->with([
            'message'=>__('Success')
        ]);
    }


    public function destroy(Role $role)
    {
        $role->delete();

        return \Redirect::route('roles.index')->with([
            'message'=>__('Success')
        ]);
    }
}
