<?php
/**
 * Created by PhpStorm.
 * dautu: long
 * Date: 2/7/17
 * Time: 4:23 PM
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    protected $table = "user_admin";

    public function getAllUserAdmin(){
        $data = self::all();
        return $data;
    }
}