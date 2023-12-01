<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function registerForm(){
        include 'views/auth/register.php';
    }

    public function register(){
        if($_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            header('Location: /login');
        } else {
            $_SESSION['error'] = 'passwords do not match';
            $_SESSION['hasErrors'] = true;
            header('Location: /register');
        }
        
    }

    public function loginForm(){
        include 'views/auth/login.php';
    }

    public function login(){
        //$user = isset(User::where('email', $_POST['email'])[0]) ? User::where('email', $_POST['email'])[0] : null; // short hand if
        $user = User::where('email', $_POST['email'])[0] ?? null; // null coalescing operator
        // if(isset($user[0])){
        //     $user = $user[0];
        // } else {
        //     $user = null;
        // }

        if($user && password_verify($_POST['password'], $user->password)){
            $_SESSION['user_id'] = $user->id;
            header('Location: /');
        } else {
            header('Location: /login');
        }
    }

    public function logout(){
        unset($_SESSION['user_id']);
        header('Location: /');
    }
}