<?php
/**
 * Created by PhpStorm.
 * User: note
 * Date: 26.12.2020
 * Time: 10:41
 */

namespace App\Modules\Admin\User\Services;


/*use App\Modules\Admin\Role\Models\Role;
use App\Modules\Admin\User\Models\User;*/
use App\Modules\Admin\User\Requests\UserRequest;
use Illuminate\Database\Eloquent\Model;

class UserService
{
    public function save(UserRequest $request, Model $model)
    {
        $model->fill($request->only($model->getFillable()));
        $model->save();
        $model->roles()->sync($request->role_id);

    }
}
