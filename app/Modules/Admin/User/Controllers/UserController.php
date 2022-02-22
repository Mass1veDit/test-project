<?php

namespace App\Modules\Admin\User\Controllers;

use App\Modules\Admin\User\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Role\Models\Role;
use App\Modules\Admin\Dashboard\Classes\Base;;
use App\Modules\Admin\User\Requests\UserRequest;
use App\Modules\Admin\User\Services\UserService;
use Illuminate\Support\Facades\Validator;
use Auth;
class UserController extends Base
{
    public function __construct(UserService $userService)
    {
        parent::__construct();
        $this->service=$userService;
    }
    public function index()
    {
        $this->authorize('view',User::class);
        $users = User::paginate(15);
        $this->title = "Список Пользователей";
        $this->content = view('Admin::User.index')
            ->with([
                'users' => $users,
                'title'=>$this->title,
            ])
            ->render();
        return $this->renderOutPut();
    }

    public function create()
    {
        $this->authorize('create',User::class);
        $roles = Role::all();
        $this->users = Auth::user();
        $this->title = "Создание пользователя";
        $this->content = view('Admin::User.create')
            ->with([
                'title'=>$this->title,
                'roles' => $roles,
                'users' => $this->users,
            ])
            ->render();
        return $this->renderOutPut();
    }

    public function store(UserRequest $request)
    {
        $this->service->save($request,new User());
        return \Redirect::route('users.index')->with([
            'message'=>__('Success')
        ]);
    }


    public function show(User $user)
    {
        $this->authorize('show',User::class);
        $this->title = "Информация о пользователе";
        $this->content = view('Admin::User.show')
            ->with([
                'title'=>$this->title,
                'item'=>$user,
            ])
            ->render();
        return $this->renderOutPut();
    }


    public function edit(User $user)
    {
        $this->authorize('edit',User::class);
        $this->title = "Изменение пользователя";
        $this->content = view('Admin::User.edit')
            ->with([
                'title'=>$this->title,
                'item'=>$user,
            ])
            ->render();
        return $this->renderOutPut();
    }


    public function update(UserRequest $request, User $user)
    {
        $this->service->save($request,$user);
        return \Redirect::route('users.index')->with([
            'message'=>__('Success')
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return \Redirect::route('users.index')->with([
            'message'=>__('Success')
        ]);
    }


    public function search(Request $request)
    {
        $this->authorize('search',User::class);
        $s = $request->s;
        $this->title = "Найденные пользователи";

       // $users = User::where('firstname','like','%'.$s.'%')->orderBy('firstname');
       // $users=DB::table('users')->where('firstname','like','%'.$s.'%')->paginate(15);

        $users = User::orWhere('firstname','like','%'.$s.'%')
            ->orWhere('lastname','like','%'.$s.'%')
            ->orWhere('phone','like','%'.$s.'%')
            ->orWhere('email','like','%'.$s.'%')
            ->paginate(15);

        $this->content = view('Admin::User.index')
            ->with([
                'users' => $users,
                'title'=>$this->title,
            ])
            ->render();
        return $this->renderOutPut();

    }
}
