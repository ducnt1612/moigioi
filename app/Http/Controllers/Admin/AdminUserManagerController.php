<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseAdminController;
use App\Http\Model\UserClient;
use Illuminate\Support\Facades\Redirect;

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

    public function getItem($id){
        $data = [];
        if($id > 0){
            $data = $this->_user_client->getItemById($id);
        }
        return view('Admin.AdminUserManager.EditUser',['data'=>$data]);
    }

    public function postItem($id){
        $data = $_POST;
        if($id > 0){
            $data = $this->_user_client->updateItem($id,$data);
        }
        return Redirect::route('user.getItem',['id'=>$id]);
    }
}
