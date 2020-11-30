<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>  
</head>
<body>
	<?php wp_footer(); ?> 
	<header class="relative shadow-outline  sticky">
	<div class="z-10 flex bg-gray-900 text-white px-4 py-3 items-center justify-between tracking-widest">
		<div>
			<a href="<?php echo site_url() ?>">
				<h1 class="text-5xl font-Marmelad-400"><?php bloginfo('name'); ?></h1>
			</a>
		</div>
	<button id="navBtn" type="button" class="lg:hidden text-gray-400 focus:text-white focus:outline-none">
		<svg xmlns="http://www.w3.org/2000/svg" width="53.572" height="37.5" class="h-8 w-8 fill-current" viewBox="0 0 14.174 9.922">
		  <defs/>
		  <path style="isolation:isolate" fill="#fff" d="M0 0v1.417h14.174V0zm0 4.252V5.67h14.174V4.252zm3.944 4.253H0v1.417h14.174V8.505z"/>
		</svg>
	</button>
	<nav id="nav-links" class="px-4 pt-2 pb-4 font-Marmelad-400">
 		<?php 
		$navItems = array('What are we about?'=>'what-are-we-about', 'Services'=>'services', 'Writer\'s Room'=>'writers-room', 'Contact Us'=>'contact-form', 'Follow Us'=>'follow-us');

		foreach ($navItems as $item => $navLinks) {
			$navLinksPrint = "site_url('/$navLinks')";
			echo "<a href=\"" . $navLinksPrint . "\"  class='mt-1 px-3 py-1 text-white font-semibold hover:bg-gray-900'><span class='opacity-25' >// </span>$item </a>";
		}
		?>
 	</nav>
	</div>
	<nav class="z-10 sm:hidden border-0 border-gray-800 border-t-2 flex bg-gray-900 text-white px-4 py-3 items-center justify-between tracking-widest shadow-2xl">
	<div id="nav-links-mobile" class="hidden px-4 pt-2 pb-4 font-Marmelad-400 ">
 		<?php 
		$navItems = array('What are we about?', 'Services', 'Writer\'s Room', 'Contact Us', 'Follow Us');
		foreach ($navItems as $item) {
			echo "<a href='#' class='px-2 py-1 block text-white font-semibold  rounded hover:bg-gray-800'><span class='opacity-25'>// </span>$item </a>";
			}
		?>
	</div>
 	</nav>
	<script type="text/javascript" lang="javascript">
		const d = document;
		const toggleBtn = d.querySelector("#navBtn");
		const navLinks = d.querySelector('#nav-links-mobile');

		toggleBtn.addEventListener('click', (event) => {
			console.log(event);

		if (navLinks.classList.contains('hidden')) {
			 	navLinks.classList.remove('hidden');
		} else {
				navLinks.classList.add('hidden');
			}
		});
	</script>
	</header>
	
	
