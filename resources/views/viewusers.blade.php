@extends('ulayout.default')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Userid</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>
    @foreach($users as $u)
    <tr>
        <td>{{$u->UserId}}</td>
        <td>{{$u->password}}</td>
        <td>{{$u->mobile}}</td>
        <td>{{$u->email}}</td>
        <td><a href="edituser?userid={{$u->UserId}}&mobile={{$u->mobile}}&email={{$u->email}}">EDIT</a> | <a href="deleteuser?userid={{$u->UserId}}&mobile={{$u->mobile}}&email={{$u->email}}">Delete</a></td>
    </tr>


    @endforeach
</table>
{{ $users->links() }}
<?php echo $users->links(); ?>
@stop