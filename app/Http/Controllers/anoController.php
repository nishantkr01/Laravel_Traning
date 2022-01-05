<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Http\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
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
        // print_r($arr['c']);
        // echo $arr['c'];

        if($arr['c']=='india')
        {
            return response()->json([
                'zero'=>'odisha',
                'one'=>'gujarat',
                'two'=>'Jharkhand',
                'three'=>'West Bengal',
                'four'=>'Kerala',
                'fibve'=>'Karnataka',
                'six'=>'Maharastra',
            ]);
        }
        else if($arr['c']=='pakistan')
        {
            return response()->json([
                'zero'=>'Sindh',
                'one'=>'Punjab',
                'two'=>'Sindh',
                'three'=>'Pak Occupied balochistan',
                'four'=>'FATA',
                'five'=>'Islamabad',
                'six'=>'Lahore',
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
