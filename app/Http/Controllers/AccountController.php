<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;

class AccountController extends Controller
{
    public function user_list(User $user)
    {
        $users = $user->getUsers();
        return view('account/user_list', ['users' => $users]);
    }

    public function get_categ(Category $category){
        $category = $category->getCategories();
        return view('account/new', ['categories' => $category]);
    }

    public function new_article(Request $request, Post $post)
    {
        $this->validate($request, [
            'name' => 'required|unique:posts|max:255',
            'text' => 'required',
            'image' => 'image',
        ]);

        $image = "";

        if ($request->file('image') != null) {
            $uploaddir = '/domains/laravel_blog/public/images/uploaded/';
            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            $image = 'uploaded/'.basename($_FILES['image']['name']);
        }

        $name = $request->input('name');
        $description = $request->input('description');
        $text = $request->input('text');
        $category = $request->input('category');

        $data = array('name' => $name, 'description' => $description, 'text' => $text, 'image' => $image, 'category' => $category);
        $post->addPost($data);

        return view('account/my_articles', ['message' => true]);
    }
}
