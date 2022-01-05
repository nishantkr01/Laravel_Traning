@extends('layout.default')
@section('content')
<h1>Message Here</h1>
    <form  method="post" action="register">
        @csrf
        UserId : <input type="text" name="userid"> <br/>
        password : <input type="text" name="password"> <br/>
        mobile : <input type="text" name="mobile" > <br/>
        email : <input type="text" name="email"> <br/>
        <input type="submit" value="submit">
    </form>
    <p>{{isset($message)?$message:''}}</p>
@stop