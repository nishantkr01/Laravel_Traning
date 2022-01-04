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
