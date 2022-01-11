@extends('layout.default')
@section('content')
<h1>Edit Details</h1>
    <form  method="post" action="edituser">
        @csrf
        UserId : <input type="text" name="userid" value="{{$_GET['userid']}}"> <br/>
        mobile : <input type="text" name="mobile" value="{{$_GET['mobile']}}"> <br/>
        email : <input type="text" name="email" value="{{$_GET['email']}}"> <br/>
        <input type="submit" value="Update">
    </form>
    <p>{{isset($message)?$message:''}}</p>
@stop