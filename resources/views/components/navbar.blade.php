<nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-tmdbDarkBlue">
	<div class="container">
		<a class="navbar-brand" href="#">
			@svg('img/logo.svg', 'main-logo')
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#userMenu">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="userMenu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('movie.home') }}">
						Movies
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="javascript:void">Popular</a>
						<a class="dropdown-item" href="javascript:void">Now Playing</a>
						<a class="dropdown-item" href="javascript:void">Upcoming</a>
						<a class="dropdown-item" href="javascript:void">Top Rated</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="javascript:void">
						TV Shows
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="javascript:void">Popular</a>
						<a class="dropdown-item" href="javascript:void">Airing Today</a>
						<a class="dropdown-item" href="javascript:void">On TV</a>
						<a class="dropdown-item" href="javascript:void">Top Rated</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="javascript:void">
						People
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="javascript:void">Popular People</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="javascript:void">
						More
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="javascript:void">Discussions</a>
						<a class="dropdown-item" href="javascript:void">Leaderboard</a>
						<a class="dropdown-item" href="javascript:void">Support</a>
						<a class="dropdown-item" href="javascript:void">API</a>
					</div>
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
	</div>
</nav>