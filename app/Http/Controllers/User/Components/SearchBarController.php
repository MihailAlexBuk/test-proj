<?php

namespace App\Http\Controllers\User\Components;

use App\Actions\User\Components\SearchBarActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\SearchRequest;

class SearchBarController extends Controller
{
    public function search(SearchRequest $request){

        $data = $request->validated();

        $videos = SearchBarActions::search_result($data, 15);

        return view('searchlist', compact('videos'));
    }
}
