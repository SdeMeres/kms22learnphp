<?php
namespace App\Models;

use App\DB;

class User extends Model {
    public static $table = 'users';
    public $id;
    public $email;
    public $password;

    public static function auth(){
        if(isset($_SESSION['user_id'])){
            return User::find($_SESSION['user_id']);
        }
        return null;
    }
}