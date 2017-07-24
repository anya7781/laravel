<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Comment;

class MainController extends Controller
{

    public function category($name, Post $post){
        $posts = $post->getPostByCategory($name);
        return view('category', ['posts' => $posts, 'name' => $name]);
    }

    public function viewArticle($id, Post $post, Comment $comment){
        $posts = $post->getPost($id);

        $comments = $comment->getComments($id);

        $role = User::checkSession();
        return view('user/view_article', ['post' => $posts, 'comments' => $comments, 'role' => $role]);
    }
}
