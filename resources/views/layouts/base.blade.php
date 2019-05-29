<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<!-- Boostrap -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  	<!-- Fuentes --> 
  	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  	@yield('title')
</head>
<body>
	<!-- Contenido del sitio -->
	@yield('content')

	<!---------------- Scripts ------------------>
	<!-- Jquery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>

	<!--------------- Scripts Adicionales -------->
	@yield('scripts')
</body>
</html>