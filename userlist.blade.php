<!DOCTYPE html>
<html>
<head>
	<title>UserList</title>
</head>
<body>
	<table>
		<thead>
			<th>SerialNo.</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>

		
		</thead>
		<tbody>
			@foreach($userlist as $key =>$value)
			<tr>
				<td>{{$key + 1}}</td>
				<td>{{$value->firstname}}</td>
				<td>{{$value->lastname}}</td>
				<td>{{$value->email}}</td>
				<td>{{$value->phone}}</td>
				<td><a href="{{url('/edit/user/'.$value->id)}}">Edit</a> &nbsp;&nbsp;<a href="{{url('/delete/user/'.$value->id)}}">Delete</a></td>
				
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>