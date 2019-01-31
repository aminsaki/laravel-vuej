<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request){

        if($request->serach){

            $users= User::where('name','LIKE',"%$request->serach%")->orderBy("id","DESC")->paginate(10);
        }else{
            $users= User::orderBy("id","DESC")->paginate(10);
            }

       return response()->json($users);

    }
    public function destroy($id)
    {
         $user= User::find($id);
         $user->delete();
        return response()->json('User Delete');

    }
    public function store(Request $request){



             User::create([
                 'name'=> $request->name,
                 'email'=>$request->email,
                 'password' => "sdfsdf"
             ]);

       return response()->json('User Create');

    }
    public function show($id){

       $user= User::where(['id'=>$id])->first();
       return response()->json($user);

    }
    public function update($id , Request $request){

         User::where(['id'=>$id])->update([
             'name'=> $request->name,
             'email'=>$request->email,
             'password' => Hash::make($request['password']),
         ]);

        return response()->json('User Update');


    }
}
