<nav>
	<ul class="nav">
		<li class="nav_item color1 first <?php echo Helper::active('index') ?>">
			<a href="/" title="Home">Home</a>
		</li>
		<li class="nav_item color2 <?php echo Helper::active('about') ?>">
			<a href="/about" title="About">About</a>
		</li>
		<li class="nav_item color3 <?php echo Helper::active('codex') ?>">
			<a href="/codex" title="Codex">Codex</a>
		</li>
		<li class="nav_item color1 <?php echo Helper::active('work') ?>">
			<a href="/work" title="Work">Work</a>
		</li>
		<li class="nav_item color2 <?php echo Helper::active('pricing') ?>">
			<a href="/pricing" title="Pricing">Pricing</a>
		</li>
		<li class="nav_item color3 last <?php echo Helper::active('contact') ?>">
			<a href="/contact" title="Contact">Contact</a>
		</li>
	</ul>
</nav>