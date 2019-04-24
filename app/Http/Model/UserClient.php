<?php
/**
 * Created by PhpStorm.
 * dautu: long
 * Date: 2/7/17
 * Time: 4:23 PM
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserClient extends Model
{
    protected $table = "user_client";

    public function getAllUserClient(){
        $data = self::all();
        return $data;
    }
}