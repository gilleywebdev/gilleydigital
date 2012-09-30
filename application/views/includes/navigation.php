<nav>
	<ul class="nav">
		<li class="nav_item color1 first <?php echo Helper::active('index') ?>">
			<a href="/">Home</a>
		</li>
		<li class="nav_item color2 <?php echo Helper::active('about') ?>">
			<a href="/about">About</a>
		</li>
		<li class="nav_item color3 <?php echo Helper::active('codex') ?>">
			<a href="/codex">Codex</a>
		</li>
		<li class="nav_item color1 <?php echo Helper::active('work') ?>">
			<a href="/work">Work</a>
		</li>
		<li class="nav_item color2 <?php echo Helper::active('pricing') ?>">
			<a href="/pricing">Pricing</a>
		</li>
		<li class="nav_item color3 last <?php echo Helper::active('contact') ?>">
			<a href="/contact">Contact</a>
		</li>
	</ul>
</nav>