<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseAdminController;
use App\Http\Model\UserAdmin;

class AdminDashboardController extends BaseAdminController
{
    public $_user_admin;

    public function __construct(UserAdmin $userAdmin)
    {
        parent::__construct();
        $this->_user_admin = $userAdmin;
    }


    public function index(){
        $allUser = $this->_user_admin->getAllUserAdmin();
       return view('Admin.AdminManager.ManageAdmin',['allUser'=>$allUser]);
    }
}
