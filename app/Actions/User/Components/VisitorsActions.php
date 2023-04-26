<?php

namespace App\Actions\User\Components;

use App\Models\Comment;
use App\Models\Post;
use App\Models\View;
use App\Models\Visitors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;

class VisitorsActions
{
    public static function checkVisitor()
    {
        if(isset(Cookie::get()['laravel_session'])){
            if(!Visitors::query()
                ->where('laravel_session', Cookie::get()['laravel_session'])
                ->where('token', csrf_token())->exists()
            ){
                Visitors::query()->create([
                    'laravel_session' => Cookie::get()['laravel_session'],
                    'token' => csrf_token(),
                    'ip' => Request::getClientIp(),
                    'agent' =>Request::header('User-Agent')
                ]);
            }
        }

    }

    public static function visitorView($post_id)
    {
        if(isset(Cookie::get()['laravel_session'])){
            $user_id = Visitors::query()
                ->where('laravel_session', Cookie::get()['laravel_session'])
                ->where('token', csrf_token())->first('id');

            if($user_id){
                if(!View::query()
                    ->where('user_id', $user_id['id'])
                    ->where('post_id', $post_id)->exists()
                ){
                    View::query()->create([
                        'user_id' => $user_id['id'],
                        'post_id' => $post_id
                    ]);
                }
            }
        }
    }

    public function visitorLike()
    {

    }

}
