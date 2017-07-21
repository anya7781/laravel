<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use Validator;


class AccountController extends Controller
{
    public function out(){
        User::deleteSession();
        return redirect('/');
    }

    public function enter(User $user){
        $role = 'admin'; $id = 2;
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

    public function myArticles(Post $post){

        $id = User::getId();
        $posts = $post->getPostsByUserId($id);


        $role = User::checkSession();
        if ($role == 'user')
            return view('account/user/my_articles', ['posts' => $posts]);
        else if($role == 'admin')
            return view('account/admin/my_articles', ['posts' => $posts]);
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
        else if ($role == 'user')
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

    public function makeAdmin(Request $request, User $user){
       $id = $request->input('id');
       $user->makeAdmin($id);
        return redirect('/users');
    }

    public function deleteUser(Request $request, User $user){
        $id = $request->input('id');
        $user->deleteUser($id);
        return redirect('/users');
    }

    public function makePublic(Request $request, Post $post){
        $id = $request->input('id');
        $post->publicPost($id);
        return redirect('new_articles');
    }

    public function editArticle(Request $request, Post $post, Category $category){
        $id = $request->input('id');
        $categories = $category->getCategories();
        $post = $post->getPost($id);
        return view('account/admin/edit_article', ['post' => $post, 'categories' => $categories]);
    }

    public function blockArticle(Request $request, Post $post){
        $id = $request->input('id');
        $post->block($id);
    }

    public function newArticles(Post $post){
        $posts = $post->newPosts();
        $role = User::checkSession();
        if ($role == 'admin')
            return view('account/admin/new_articles', ['posts' => $posts]);
        else
            return redirect('/');
    }

    public function updateArticle(Request $request, Post $post, Category $category)
    {
        $id = $request->input('id');
        $categories = $category->getCategories();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'text' => 'required',
            'image' => 'image',
        ]);

        if ($validator->fails()) {
            $posts = $post->getPost($id);
            return view('account/admin/edit_article', ['post' => $posts, 'categories' => $categories])
                ->withErrors($validator);
        }


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


        $data = array('name' => $name, 'description' => $description, 'text' => $text, 'image' => $image, 'category' => $category, 'id' => $id);
        $post->updatePost($data);

        $posts = $post->newPosts();

        $role = User::checkSession();
        if ($role == 'admin')
            return view('account/admin/new_articles', ['posts' => $posts]);
        else
            return redirect('/');
    }


}
