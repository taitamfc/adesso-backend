<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JourneyArticle;

class JourneyArticleController extends Controller
{
    public function index(){
        $items = JourneyArticle::all();
        return $this->responseSuccess($items);
    }
    public function show($id){
        $item = JourneyArticle::find($id);
        return $this->responseSuccess($item);
    }
}
