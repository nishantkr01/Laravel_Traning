<script type="text/javascript" src="{{ URL::asset('js/jQuery.js') }}"> </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#c').change(function() {
            // alert("hhh")
            $.ajax({
                type: "POST",
                url: '/getstate/',
                dataType: "JSON",
                data: {
                    c: $('#c').val(),
                    "_token": "{{ csrf_token() }}"
                },
                success: function(result) {
                    var jsontext = JSON.stringify(result);
                    var obj = JSON.parse(jsontext);
                    st = "";
                    $.each(obj, function(key, data) {
                        // console.log(key+" "+data)
                        st = st + "<option>" + data + "</option>";
                    })
                    $('#s').html(st);
                }
            })
        })

    })
</script>
@extends('layout.default')
@section('content')

    <select id="c">
        <option value="india">india</option>
        <option value="pakistan">pakistan</option>
    </select>

    <select id="s">

    </select>

@stop
