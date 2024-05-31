<?php
namespace App\Controllers;

use App\Models\User;

class UserController {
    public function index() {
        $users = User::all();
        include __DIR__ . '/../../views/users/index.php';
    }

    public function create() {
        include __DIR__ . '/../../views/users/create.php';
    }

    public function store() {
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        header('Location: /users');
    }

    public function edit($id) {
        $user = User::find($id);
        if ($user) {
            include __DIR__ . '/../../views/users/edit.php';
        } else {
            include __DIR__ . '/../../views/404.php';
        }
    }

    public function update($id) {
        $user = User::find($id);
        $user->email = $_POST['email'];
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }
        $user->save();
        header('Location: /users');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        header('Location: /users');
    }
}