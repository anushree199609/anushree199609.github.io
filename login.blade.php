<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
    color:red;
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
	<h2>Login Page</h2>

	<form method = "post" action = "{{url('/loginuser')}}">
	@csrf
		<label>Email</label><br>
		<input type="text" id="fied" name="email" placeholder="Enter email" ><br>
		<label>Password</label><br>
		<input type="text" id="fied" name="password" placeholder="Enter password" ><br>
		
		<button type="submit" class="button" name="button">Login</button>
	</form>
</div>
</body>

</html>