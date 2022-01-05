<script type="text/javascript" src="{{URL::asset('js/jQuery.js') }}"</script>
<script>
    $(document).ready(function()
    {
        $.ajax({
            type:"POST",
            url: "/getstate/",
            dataType: "JSON",
            data:{c: $('#c').val(), "_token": "{{ csrf_token() }}"},
            success:function(result){
                var jsontext=JSON.stringify(result);
                var obj=JSON.parse(jsontext);
                st="";
                $.each(obj, function(key, data){
                    st=st+"<option>"+data+"</option>";
                })
                $('#s').html(st);
            }
        })
    }
    )

</script>

<select id="c">
    <option value="india">India</option>
    <option value="pakistan">Pakistan</option>
</select>

<select id="sphp">
    
</select>