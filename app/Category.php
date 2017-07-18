<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'Name';
    public $incrementing = false;
    public $timestamps = false;

    public function getCategories(){
        return $this->all();
    }
}
