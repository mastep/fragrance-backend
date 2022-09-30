<?php

namespace App\Http\Controllers\Forms;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController
{
    public function store(Request $request){
        $data=json_decode($request->getContent(), true);
        $name = $data['userName'];
        $photo = $data['userPhoto'];
        $user=User::create(["name"=>$name, 'email'=>'t@test'.time().'.ru', 'password'=>"dsadsad"]);

        if(!empty($photo)){
            list($type, $b64) = explode(';base64,', $photo);
            $b64 = base64_decode($b64);
            $type=preg_replace("/^(.*)?\//", "",$type);
            if(in_array($type, ['jpg','jpeg', 'png', 'gif'])){
                $nameFile=$user->id.".".$type;
                $Storage=Storage::disk('public');
                $path="users/photo/".$nameFile;
                if($Storage->put($path, $b64)){
                    $user->photo="/storage/".$path;
                    $user->save();
                }

            }
        }

        return response(['message'=>$data['userName']], 200)
            ->header('Content-Type', 'application/json');
    }
    public function index(){
        $users = User::orderByDesc('id')->take(30)->get();
        return response(['data'=>$users], 200)
            ->header('Content-Type', 'application/json');
    }
}

