<?php

namespace App\Http\Controllers\Forms;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController
{
    public function store(Request $request){
        $data=json_decode($request->getContent(), true);
        $name = $data['userName'];
        User::create(["name"=>$name, 'email'=>'t@test'.time().'.ru', 'password'=>"dsadsad"])->save();
        return response(['message'=>$data['userName']], 200)
            ->header('Content-Type', 'application/json');
    }
    public function index(){
        $users = User::all();
        return response(['data'=>$users], 200)
            ->header('Content-Type', 'application/json');
    }
}

