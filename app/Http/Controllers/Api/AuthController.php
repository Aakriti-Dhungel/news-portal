<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function create_category(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "name" =>"required",
            "email" =>"required | unique:admins",
            "password"=>"required min:6"
        ]);
        if($validator->fails()){
            return response()->json([
                "status"=>false,
                "message" =>$validator->errors(),
            ]);
        }
        //save
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return response()->json([
            "status"=>true,
            "message"=>"Category created Successfully",
        ]);
        
    }
}
