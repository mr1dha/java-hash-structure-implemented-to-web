<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" class="input" autofocus>
	<button class="btn">Cari</button>
	<p class="result">Unset</p>
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