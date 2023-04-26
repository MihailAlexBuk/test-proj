<?php

namespace App\Http\Controllers\User;

use App\Actions\User\Components\VisitorsActions;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\View;


class PostController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function show($id)
    {
        $post = Post::query()->where('id', $id)->first();
        VisitorsActions::checkVisitor();
        VisitorsActions::visitorView($post->id);

        $views = View::query()->where('post_id', $post->id)->count();
        return $views;
    }

}
