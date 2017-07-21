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
        $post->photo = $data['image'];
        $post->date = date("Y-m-d");
        $post->id_user = 1;
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


}
