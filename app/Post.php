<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    public function addPost($data){
        $post = new Post;
        $post->name = $data['name'];
        $post->description = $data['description'];
        $post->text = $data['text'];
        if ($data['image'] != "")
            $post->photo = $data['image'];
        $post->date = date("Y-m-d");
        $post->id_user = $data['id_user'];
        $post->category = $data['category'];
        $post->save();
    }

    public function newPosts(){
        return $this->where('permission', '=', 0)->get();
    }

    public function publicPost($id){
        $post = $this->find($id);
        $post->permission = 1;
        $post->save();
    }

    public function block($id){
        $post = $this->find($id);
        $post->delete();
    }

    public function getPost($id){
        $post = $this->find($id);
        return $post;
    }

    public function updatePost($data){
        $post = $this->find($data['id']);
        $post->name = $data['name'];
        $post->description = $data['description'];
        $post->text = $data['text'];
        if ($data['image'] != "")
            $post->photo = $data['image'];
        $post->date = date("Y-m-d");
        $post->id_user = 1;
        $post->category = $data['category'];
        $post->save();
    }

    public function getPostsByUserId($id){
        $posts = $this->where('id_user', '=', $id)->get();
        return $posts;
    }

    public function getPostByCategory($name){
        $posts = $this->where('category', '=', $name)->get();
        return $posts;
    }



}
