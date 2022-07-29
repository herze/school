<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(){
        $users = User::all();
        return view('backend.user.view',compact('users'));
    }

    public function create(){
        return view('backend.user.create');
    }

    public function store(UserPostRequest $request){
        dd($request->validated());
    }
}
