<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    public function index(){
        $items = Journal::all();
        return $this->responseSuccess($items);
    }
    public function show($id){
        $item = Journal::find($id);
        return $this->responseSuccess($item);
    }
}
