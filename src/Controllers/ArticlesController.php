<?php
namespace App\Controllers;

use App\DB;
use App\Models\Article;

class ArticlesController {
    public function index(){
        $articles = Article::all();
    }

}