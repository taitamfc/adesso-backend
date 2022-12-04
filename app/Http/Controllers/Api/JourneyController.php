<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journey;

class JourneyController extends Controller
{
    public function index(){
        $items = Journey::all();
        return $this->responseSuccess($items);
    }
    public function show($id){
        $item = Journey::find($id);
        return $this->responseSuccess($item);
    }
}
