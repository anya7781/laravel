<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;

class AccountController extends Controller
{
    public function out(){
        User::deleteSession();
        return redirect('/');
    }

    public function enter(User $user){
        $role = 'user'; $id = 2;
        User::makeSession($role, $id);

        $role = User::checkSession();

        $id = User::getId();


        $user = $user->getUser($id);

        if ($role == 'user')
            return view('account/user/user', ['user' => $user]);
        else if($role == 'admin')
            return view('account/admin/admin', ['user' => $user]);
        else return redirect('/');
    }

    public function myArticles(){
        $role = User::checkSession();
        if ($role == 'user')
            return view('account/user/my_articles');
        else if($role == 'admin')
            return view('account/admin/my_articles');
        else return redirect('/');
    }

    public function user_list(User $user)
    {
        $users = $user->getUsers();

        if(User::checkSession() == 'admin')
            return view('account/admin/user_list', ['users' => $users]);
        else return redirect('/');
    }

    public function get_categ(Category $category){
        $category = $category->getCategories();

        $role = User::checkSession();
        if ($role == 'admin')
            return view('account/admin/new', ['categories' => $category]);
        else if ($role = 'user')
            return view('account/user/new', ['categories' => $category]);
        else
            return redirect('/');
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

        $role = User::checkSession();
        if ($role == 'admin')
            return view('account/admin/my_articles', ['message' => true]);
        else if ($role = 'user')
            return view('account/user/my_articles', ['message' => true]);
        else
            return redirect('/');
    }
}
