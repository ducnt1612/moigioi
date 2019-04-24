<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseAdminController;
use App\Http\Model\UserClient;

class AdminUserManagerController extends BaseAdminController
{
    public $_user_client;

    public function __construct(UserClient $userClient)
    {
        parent::__construct();
        $this->_user_client = $userClient;
    }


    public function index(){
        $allUser = $this->_user_client->getAllUserClient();
       return view('Admin.AdminUserManager.ManageUser',['allUser'=>$allUser]);
    }
}
