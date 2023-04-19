<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'body'=> 'required',
        ]);
        
        $request->user()->post()->create($request->only('body'));
        return back();
    }
}
