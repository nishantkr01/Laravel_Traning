@extends('ulayout.default')
@section('content')
<h1>Welcome </h1> 
@if(Session::has('userid'))
{{Session::get('userid')}}
@endif
@stop