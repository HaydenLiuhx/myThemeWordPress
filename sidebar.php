
<div id="right-box">
	<!-- use the tool -->
	<!-- whether it has a sidebar -->
	<?php if( is_dynamic_sidebar() ){ dynamic_sidebar(); }else{ ?>
		<!-- register_siderbar -> register a tool in function.php -->
	<div class="sbox">
		<h2>Class</h2>
		<ul>
		<!-- call the list -->
		<?php wp_list_cats(); ?>
		</ul>
	</div>
	<div class="sbox">
		<h2>Page List</h2>
		<ul>
			<!-- call the pages -->
		<?php wp_list_pages(); ?>
		</ul>
	</div>
	<div class="sbox">
		<h2>Link</h2>
		<ul>
		<?php get_links(); ?>
		</ul>
	</div>
	<div class="sbox">
		<h2>Functions</h2>
		<ul>
		<?php wp_register(); ?>
		<?php wp_loginout(); ?>
		</ul>
	</div>
	<?php } ?>
</div>