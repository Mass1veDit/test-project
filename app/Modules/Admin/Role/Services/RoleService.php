<?php

namespace App\Modules\Admin\Role\Services;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Admin\Role\Requests\RoleRequest;

class RoleService
{
    public function save(RoleRequest $request, Model $model)
    {
        $model->fill($request->only($model->getFillable()));
        $model->save();
    }
}
