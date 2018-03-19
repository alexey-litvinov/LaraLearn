<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){

      $this->hasOne(Post::class);
    }

    public function author(){

      $this->hasOne(User::class);
    }

    public function allow(){

      $this->status = 1;
      $this->save();
    }

    public function disAllow(){

      $this->status = 0;
      $this->save();
    }

    public function toggleStatus(){

      if($this->status = 0){
        return $this->allow();
      }

      return $this->disAllow();
    }

    public function delete(){

      $this->delete();
    }
}
