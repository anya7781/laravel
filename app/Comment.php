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
}
