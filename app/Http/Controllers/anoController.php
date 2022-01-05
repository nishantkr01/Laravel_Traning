<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
// use DB;

class anoController extends Controller
{
    //
    public function register(Request $request){
        $arr = $request->all();
        DB::table('UserMaster')->insert(
            ['UserId'=> $arr['userid'], 'password'=>$arr['password'], 'mobile'=>$arr['mobile'], 'email'=>$arr['email']]
        );
        $message ="Registered Successfully";
        return view('register', ['message'=>$message]);
    }


    public function getstate(Request $request)
    {
        $arr = $request->all();
        if($arr['c']=="india")
        {
            return response()->json([
                'zero'=>'odisha',
                'one'=>'gujarat',
            ]);
        }
        else if($arr['c']=='pakistan')
        {
            return response()->json([
                'zero'=>'odisha',
                'one'=>'gujarat',
            ]);
        }
    }

    function calc(Request $request)
    {
        $arr = $request->all();
        if ($arr["btn"] == "add") {
            $result = $arr["fno"] + $arr["sno"];
        } else if ($arr["btn"] == "sub") {
            $result = $arr["fno"] - $arr["sno"];
        } else {
            return $result="";
        }
        $result = "Result is : " . $result;
        return view('login', ['result' => $result]);
    }
}
