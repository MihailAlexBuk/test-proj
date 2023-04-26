<?php

namespace App\Http\Controllers\User;

use App\Actions\User\Components\VisitorsActions;
use App\Http\Controllers\Controller;
use App\Models\View;
use App\Models\Visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        VisitorsActions::checkVisitor();
        VisitorsActions::visitorView(1);

        $views = View::query()->where('post_id', 1)->count();
        return $views;

//        return view('user.index');
    }
}
