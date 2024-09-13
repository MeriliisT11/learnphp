<?php

namespace App\Controllers;

class PublicController {
    public function index() {
        $posts = [
            ['title' => 'Some title 1', 'body' => 'Some body 1'],
            ['title' => 'Some title 2', 'body' => 'Some body 2'],
            ['title' => 'Some title 3', 'body' => 'Some body 3'],
            ['title' => 'Some title 4', 'body' => 'Some body 4'],
        ];
        include 'views/index.php';
    }

    public function us(){
        $posts = [
            ['title' => 'Some US title 1', 'body' => 'Some US body 1'],
            ['title' => 'Some US title 2', 'body' => 'Some US body 2'],
            ['title' => 'Some US title 3', 'body' => 'Some US body 3'],
            ['title' => 'Some US title 4', 'body' => 'Some US body 4'],
        ];
        include 'views/us.php';
    }

    public function tech() {
        $posts = [
            ['title' => 'Some Tech title 1', 'body' => 'Some Tech body 1'],
            ['title' => 'Some Tech title 2', 'body' => 'Some Tech body 2'],
            ['title' => 'Some Tech title 3', 'body' => 'Some Tech body 3'],
            ['title' => 'Some Tech title 4', 'body' => 'Some Tech body 4'],
        ];
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
