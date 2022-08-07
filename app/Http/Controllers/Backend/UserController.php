<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $validatedData = $request->validated();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = "USER";
        $user->save();

        $notification = array(
          'message'=> 'User Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect::route('user.view')->with($notification);
    }

    public function edit(User $user){

        return view('backend.user.edit',compact('user'));
    }

    public function update(Request $request){
        dd($request->all());
    }
}
