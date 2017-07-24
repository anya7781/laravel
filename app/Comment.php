<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;

    public function getComments($id){
        $comments = $this->where('id_post', '=', $id)->get();
        return $comments;
    }

    public function newComment($data){
        $comment = new Comment;
        $comment->Comment = $data['text'];
        $comment->login_user = $data['user_login'];
        $comment->id_post = $data['post_id'];
        $comment->save();
    }

    public function getQuantity($id){
        $comments = $this->where('id_post', '=', $id)->get();
        return count($comments);
    }
}
