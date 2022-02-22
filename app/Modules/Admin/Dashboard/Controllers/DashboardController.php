<?php

namespace App\Modules\Admin\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Dashboard\Classes\Base;
use Illuminate\Support\Facades\DB;

class DashboardController extends Base
{
    public function index()
    {
        $this->title = __("admin.dashboard_title_page");
        $this->countUsers = DB::table('users')->simplePaginate(15);;
        $this->content  = view('Admin::Dashboard.index')->with([
            'title' => $this->title,
            'countUsers'=>$this->countUsers,
        ])->render();

        return $this->renderOutput();
    }

}
