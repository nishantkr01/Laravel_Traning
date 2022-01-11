<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Http\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\session;
// use DB;

class anoController extends Controller
{
    //
    public function deleteuserdetails(Request $request)
    {
        $arr = $request->all();
        DB::delete('delete from usermaster where userId=?',[$arr['userid']]);
        $users=DB::table("usermaster")->paginate(2);
        return view('viewusers')->with('users',$users);
    }
    public function updateuserdetails(Request $request){
        $arr = $request->all();
        DB::update('update usermaster set mobile=?,email=? where userid=?',[$arr['mobile'],$arr['email'],$arr['userid']]);
        $users=DB::table("usermaster")->paginate(2);
        // return View::make('viewuser')->with('users',$users);
        return view('viewusers')->with('users',$users);

    }

    public function contactus(Request $request){
        $arr = $request->all();
        DB::table('contactus')->insert(
            ['name'=> $arr['name'], 'email'=>$arr['email'], 'mobile'=>$arr['mobile'], 'age'=>$arr['age'], 'address'=>$arr['username'],'gender'=>$arr['gender']]
        );
        $message ="Contact Successfully";
        return view('contactus', ['message'=>$message]);
    }


    public function login(Request $request){
        $arr = $request->all();
        $user = DB::table("UserMaster")->where("userid",$arr['userid'])->where('password', $arr['password'])->first();
        if($user){
            // session::put('variableName', $arr['userid']);/

            session(['userid' => $arr['userid']]);

            return view('userHome');
        }else{
            $message = "Invalid Login Details !";
            return view('login',['message'=>$message]);
        }
    }

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
