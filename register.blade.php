<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
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
    color:rgb();
    padding:10px;
    font-size:12px;
    


       

}

		
	</style>
</head>
<body>
	<div class="main">
	<h2>Registration Page</h2>

	<form method = "post" action = "{{url('/save')}}">
		<label>FirstName</label><br>
		<input type="text" id="fied" name="firstname" placeholder="Enter name" ><br>
		<label>LastName</label><br>
		<input type="text" id="fied" name="lastname" placeholder="Enter name" ><br>
		<label>Email</label><br>
		<input type="text" id="fied" name="email" placeholder="Enter email" ><br>
		<label>Password</label><br>
		<input type="password" id="fied" name="password" placeholder="Enter password" ><br>
		<label>PhoneNo.</label><br>
		<input type="text" id="fied" name="phone" placeholder="Enter phone" ><br>
		@csrf

		<button type="submit" class="button" name="button">Register</button>
	</form>
</div>
</body>

</html>