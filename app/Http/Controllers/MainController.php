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

    public  function addComment(Request $request, Comment $comment, Post $post, User $user){

       $text = $request->input('text');
       $user_id = $request->input('user_id');
       $post_id = $request->input('post_id');

       $user_login = $user->getLogin($user_id);

       $data = array('text' => $text, 'user_login' => $user_login, 'post_id' => $post_id);
       $comment->newComment($data);

       return redirect('main/article/'.$post_id);
    }

    public  function allPosts(Post $post){
       $posts = $post->getAllPosts();
       return view('user/all', ['posts' => $posts]);
    }


    }
