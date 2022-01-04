{{-- @extends('layout.default')
@section('content') --}}
    {{-- Login header --}}
    {{-- {{$no = 2}}
    @if($no==1)
    i have one record!
    @elseif($no>1)
    I have multiple records!
    @else
    I don't have ant records!
    @endif --}}

    <form method="GET" action="addition">
        Fno : <input type="text" id="fno" name="fno"/></br>
        Sno : <input type="text" id="sno" name="sno"/></br>
        <button type="submit">Add</button>
        <p> {{isset($result)?$result:''}}</p>
    </form>
{{-- @stop --}}