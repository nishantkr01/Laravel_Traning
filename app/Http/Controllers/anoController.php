<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


class anoController extends Controller
{
    //
    function addition(Request $request){
        $arr = $request->all();
        $result = $arr["fno"]+$arr["sno"];
        $result = "Result is : ".$result;
        return view('login',['result'=>$result]);
    }
}
