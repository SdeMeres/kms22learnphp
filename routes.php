<?php

use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\PublicController;
use App\Controllers\UserController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/about', [PublicController::class, 'about']);

Router::get('/contacts', [PublicController::class, 'contacts']);

Router::get('/admin/articles', [ArticlesController::class, 'index']);

Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);
Router::get('/admin/articles/show', [ArticlesController::class, 'show']);
Router::get('/admin/articles/edit', [ArticlesController::class, 'edit']);
Router::post('/admin/articles/edit', [ArticlesController::class, 'update']);
Router::get('/admin/articles/delete', [ArticlesController::class, 'destroy']);

Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/register', [AuthController::class, 'register']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/logout', [AuthController::class, 'logout']);

//

Router::get('', [PublicController::class, 'index']);
Router::get('/articles', [ArticlesController::class, 'index']);

// User routes
Router::get('/users', [UserController::class, 'index']);
Router::get('/users/create', [UserController::class, 'create']);
Router::post('/users/store', [UserController::class, 'store']);
Router::get('/users/edit/{id}', [UserController::class, 'edit']);
Router::post('/users/update/{id}', [UserController::class, 'update']);
Router::post('/users/destroy/{id}', [UserController::class, 'destroy']);