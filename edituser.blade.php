<!DOCTYPE html>
<html>
<head>
	<title>EditUser</title>

	<style>
		*{
    margin:0;
    padding:0;
}
body{
    background-color: skyblue;
}

div.main{
    width:400px;
    margin:100px auto 0px auto;
}

.button{
    background-color:white;
    color:Red;
    padding:15px;
    font-size:16px;
    
    padding:7px;
    width:200px;
    font-family:sans-serif;
    border:none;
    border-radius:3px;

}

		
	</style>
</head>
<body>
	<div class="main">
	<h2>EditUser</h2>

	<form method = "post" action = "{{url('/edit/user/'.$data['id'])}}">
		<label>FirstName</label><br>
		<input type="text" id="fied" name="firstname" value="{{$data['firstname']}}" placeholder="Enter name" ><br>
		<label>LastName</label><br>
		<input type="text" id="fied" name="lastname" value="{{$data['lastname']}}" placeholder="Enter name" ><br>
		<label>Email</label><br>
		<input type="text" id="fied" name="email" value="{{$data['email']}}" placeholder="Enter email" ><br>
		
		<label>PhoneNo.</label><br>
		<input type="text" id="fied" name="phone" value="{{$data['phone']}}" placeholder="Enter phone" ><br>
		@csrf
		<button type="submit" class="button" name="button">Edit</button>
	</form>
</div>

</body>
</html>