<nav class="navbar navbar-expand-lg navbar-light bg-tmdbDarkBlue">
	<div class="container">
		<a class="navbar-brand" href="#">
		@svg('img/logo.svg', 'main-logo')
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#userMenu">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="userMenu">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active ">
				<a class="nav-link" href="#">Movies <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">TV Shows</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
					People
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1">More</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><i class="fas fa-plus"></i></li>
			<li class="nav-item"><span class="glyphicon"></span></li>
			<li class="nav-item"><span class="glyphicon"></span></li>
			<li class="nav-item"><span class="glyphicon"></span></li>
			<li class="nav-item"><span class="glyphicon"></span></li>
		</ul>
	</div>
</nav>