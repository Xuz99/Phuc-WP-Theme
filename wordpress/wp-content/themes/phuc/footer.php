<footer class="bg-gray-900">
	<div class="grid gap-4 grid-cols-2 m-auto relative text-white flex p-10">
	<section>
		<h3><?php bloginfo('name'); ?></h3>
		<nav id="nav-links-footer" class="px-4 pt-2 pb-4 font-Marmelad-400">
			<?php 
			$navItems = array('What are we about?'=>'what-are-we-about', 'Services'=>'services', 'Writer\'s Room'=>'writers-room', 'Contact Us'=>'contact-form', 'Follow Us'=>'follow-us');

			foreach ($navItems as $item => $navLinks) {
				$navLinksPrint = "site_url('/$navLinks')";
				echo "<a href=\"" . $navLinksPrint . "\"  class='block mt-1 px-3 py-1 text-white font-semibold hover:bg-gray-900'><span class='opacity-25' >// </span>$item </a>";
			}
			?>
		</nav>
	</section>
	<section>
		<h3>Follow Us!</h3>
	</section>
	</div>
	

</footer>
</body>
</html>