<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
	<title>Data Editor</title>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">DATA EDITOR</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">PENCARIAN EDITOR</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">TAMPILKAN EDITOR</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">ABOUT ME</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	<!-- End Navbar -->

	<!-- Jumbotron -->
	<!-- End Jumbotron -->

	<input type="text" class="input" autofocus>
	<button class="btn">Cari</button>
	<p class="result">Unset</p>
    <link rel="stylesheet" href="assets\bootstrap\js\bootstrap.min.js">
	<script src="assets\bootstrap\js\jquery.min.js"></script>
	<script>
		$(".btn").click(function(){
			loadData();
		});

		function loadData(){
			$.get('core/get.php?q="'+$(".input").val()+'"', function(data){
				$(".result").html(data);
			});
		}
	</script>
</body>
</html>
