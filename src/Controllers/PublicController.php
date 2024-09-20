<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() 
    {
    
        $posts = Post::all();
        dump($posts);
        $users =  User::all();
        dump($users);
        
         include 'views/index.php';
    }

    public function us(){
        include 'views/us.php';
    }

    public function tech() {
        
        include 'views/tech.php';
    }

    public function form() {
        //dump($_GET, $_POST); //query

        // if(isset($_GET['fname'])){
        //     $fname = $_GET['fname'];
        // } else {
        //     $fname = null;
        // }

        //$fname = isset($_GET['fname']) ? $_GET['fname'] : null;

        $fname = $_POST['fname'] ?? null;
        include 'views/form.php';
    }

    public function answer(){
        echo $_POST['fname'];
    }
}
