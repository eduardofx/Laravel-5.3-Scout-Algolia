<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<style type="text/css">
		.tabela{border: 1px solid #ccc; margin: 10px; min-height: 300px;}
	</style>
</head>
<body>

	<div class="container">
	<br /><br />
	<form action="/" method="GET"> 
		Search: <input type="text" name="str" value="{{$str}}">
		<input type="submit" class="btn btn-primary" value="Buscar"> 
	</form>
	
	<br />	

		@foreach($courses as $course)
			<div class="col-md-3 tabela">
				<h3>{{$course->name}}</h3>
				<p>{{$course->description}} , <br /><br />By {{$course->author}}</p>
			</div>
		@endforeach
	</div>
</body>
</html>