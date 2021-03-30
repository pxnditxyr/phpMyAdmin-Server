<?php  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/index.css">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<title> Yuki xD </title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="./" > Yuki xD </a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="./" > Home </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./phpMyAdmin/" > phpMyAdmin </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./info.php" > php Info </a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									About Us
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="./me.html" > Me </a></li>
									<li><a class="dropdown-item" href="./another.html" > Another </a></li>
									<li><a class="dropdown-item" href="./features.html" > Features </a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<?php include 'alien.php'; ?>

		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" 
			integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" 
			crossorigin="anonymous"
		>
		</script>
		<script src="./js/bootstrap.min.js"></script>
	</body>
</html>
