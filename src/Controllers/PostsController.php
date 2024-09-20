<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        include 'views/posts/index.php';
    }

    public function create()
    {
        include 'views/posts/create.php';
    }

    public function store(){
   
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        header('Location: /admin/posts');
    }
    public function destroy(){
   
        $post = Post::find($_GET['id']);
        if ($post){
            $post->delete();
        }
        header('Location: /admin/posts');
    }
}
