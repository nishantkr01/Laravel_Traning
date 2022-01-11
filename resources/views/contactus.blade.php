@extends('layout.default')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/Valid.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#stu_form").validate(
        {
            rules:{
                'name':{
                    required:true,
                    accept:"[a-zA-Z]"
                },
                'age':{
                    required:true,
                    accept:"[1-9]{2}"
                },
                'date':{
                    required:true
                },
                'email':{
                    required:true,
                    minlenght:4,
                    maxlenght:15                    
                },
                'mob':{
					required:true,
					indmob:'[6-9][0-9]{9}'
				}
            }
        });
});
</script>




<form id="stu_form" method="post" action="/contact" class="cfrm">
    @csrf
    <div class="container">
    	<h2 style="text-decoration: underline;">Contact Us</h2><br/>
    	<div class="row">
    		<div class="col-md-12">
    			<div class="col-md-4 p-2">
    				<input type="text" name="name" placeholder="Enter Your name" class="form-control">
    			</div>
    			<div class="col-md-4 p-2">
    				<input type="text" name="email" placeholder="Enter Your Email" class="form-control">
    			</div>
    			<div class="col-md-4 p-2">
    				<input type="text" name="mobile" placeholder="Enter Your Mobile" class="form-control">
    			</div>
    			<div class="col-md-4 p-2">
    				<input type="date" name="age" placeholder="Enter Your Age" class="form-control">
    			</div>
    			<div class="col-md-4 p-2">
    				<input type="text" name="username" placeholder="Enter Your Address" class="form-control">
    			</div>
    			<div class="col-md-4 p-2">
    				<select class="form-control" name="gender">
    					<option>Choose Your Gender</option>
    					<option>Male</option>
    					<option>Female</option>
    				</select>
    			</div>
    		</div><br/><br/>
    		<div class="col text-center"> <input type="submit" value="Submit"></div>
    	</div>
    </div>
    <p>{{isset($message)?$message:""}}</p>
</form>
@stop