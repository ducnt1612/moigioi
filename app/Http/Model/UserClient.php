<?php
/**
 * Created by PhpStorm.
 * dautu: long
 * Date: 2/7/17
 * Time: 4:23 PM
 */

namespace App\Http\Model;

use App\Http\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;

class UserClient extends BaseModel
{
    protected $table = "user_client";
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = array('role','user_name','password','full_name','birthday','address','phone',
                                    'image_url','description','created_at','updated_at');

    public function getAllUserClient(){
        $data = self::paginate('2');
        return $data;
    }

    public function getItemById($id){
        $data = self::find($id);
        return $data;
    }

    public function createItem($data)
    {
        try {
            $fieldInput = $this->checkFieldInTable($data);
            $item = new UserClient();
            if (is_array($fieldInput) && count($fieldInput) > 0) {
                foreach ($fieldInput as $k => $v) {
                    $item->$k = $v;
                }
            }
            $item->save();
            return $item->id;
        } catch (PDOException $e) {
            throw new PDOException();
        }
    }

    public function updateItem($id, $data)
    {
        try {
            $fieldInput = $this->checkFieldInTable($data);
            $item = self::getItemById($id);
            foreach ($fieldInput as $k => $v) {
                $item->$k = $v;
            }
            $item->update();
            return true;
        } catch (PDOException $e) {
            throw new PDOException();
        }
    }
}