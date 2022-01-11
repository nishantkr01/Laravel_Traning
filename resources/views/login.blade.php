@extends('layout.default')
@section('content')
    {{-- Login header --}}
    {{-- {{$no = 2}}
    @if($no==1)
    i have one record!
    @elseif($no>1)
    I have multiple records!
    @else
    I don't have ant records!
    @endif --}}

    {{-- <form method="GET" action="addition">
        Fno : <input class="form-control"  type="text" id="fno" name="fno"/></br>
        Sno : <input class="form-control" type="text" id="sno" name="sno"/></br>
        <button class="form-control" name="btn" value="add" type="submit">Add</button>
        <button class="form-control" name="btn" value="sub" type="submit">Sub</button>

        <p> {{isset($result)?$result:''}}</p>
    </form> --}}

    <form method="post" action="/login">
        UserId : <input class="form-control"  type="text" id="userid" name="userid"/></br>
        Password : <input class="form-control" type="pwd" id="password" name="password"/></br>

        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button class="form-control btn btn-primary btn-large" name="submit" type="submit">Login</button>
        {{-- <button class="form-control" name="btn" value="sub" type="submit">Sub</button> --}}

        <p>{{isset($message)?$message:""}}</p>

        <a href="/forgotpwd">Forget Password</a>
        {{-- <p> {{isset($result)?$result:''}}</p> --}}
    </form>

@stop