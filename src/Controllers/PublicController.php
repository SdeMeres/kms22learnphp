<?php
namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Kaspar';
        $list = ['sai', 'leib', 'piim', 'viin'];
        include 'views/index.php';
    }

    public function about(){
        include 'views/about.php';
    }

    public function contacts(){
        include 'views/contacts.php';
    }
}