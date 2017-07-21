<?php
namespace App;
session_start();

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    public function getUser($id){
       return $this->where('id', '=', $id)->first();
    }

        public function getUsers(){
        return $this->all();
    }

    public static function checkSession(){
            if (isset($_SESSION['role']))
                return $_SESSION['role'];
            else return null;
    }

    public static function makeSession($role, $id){
        $_SESSION['role'] = $role;
        $_SESSION['id'] = $id;
    }

    public static function deleteSession(){
        session_destroy();
    }

    public static function getId(){
       return $_SESSION['id'];
    }

    public function makeAdmin($id){
        $user = $this->find($id);
        $user->access_type = 'admin';
        $user->save();
    }

    public function deleteUser($id){
        $user = $this->find($id);
        $user->delete();
    }
}
