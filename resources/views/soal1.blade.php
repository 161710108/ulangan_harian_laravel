<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Halo Eloquent</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<center><h2><b>One To Many</b></h2></center>
			@foreach ($guru as $temp)
				<h3><b>Nama Guru: {{$temp->nama}}</b></h3>
				<h4>Nama Murid : 
					@foreach($temp->siswa as $tampung) 
					<li>{{$tampung->nama}}<br></li>
					@endforeach
				</h4>
				<hr/>
			@endforeach
			<br></div>
	</body>
</html>