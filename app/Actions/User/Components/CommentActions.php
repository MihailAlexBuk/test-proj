<?php

namespace App\Actions\User\Components;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentActions
{
    public function add_comment($data){
        $comment = new Comment();

//        получить данные и проверить есть ли в базе и если есть добавить user_id
        $comment->user_id = Auth::id();

        $comment->post_id = $data['post_id'];
        $comment->comment = $data['comment'];
        if(isset($data['parent_id'])){
            $comment->parent_id = $data['parent_id'];
        }
        $comment->save();
    }


}
