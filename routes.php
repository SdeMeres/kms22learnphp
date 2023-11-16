<?php

use App\Controllers\ArticlesController;
use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/about', [PublicController::class, 'about']);

Router::addRoute('/contacts', [PublicController::class, 'contacts']);

Router::addRoute('/articles', [ArticlesController::class, 'index']);