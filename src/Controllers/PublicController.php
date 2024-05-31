<?php
namespace App\Controllers;

use App\Models\Article;

class PublicController {
    public function index(){
        $articles = Article::all();
        include __DIR__ .'/../../views/index.php';
    }

    public function about(){
        $articles = Article::all();
        dump($articles);
        dd($articles);
        include 'views/about.php';
    }

    public function contacts(){
        include 'views/contacts.php';
    }
}