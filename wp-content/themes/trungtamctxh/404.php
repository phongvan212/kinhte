<?php get_header(); ?>
 
<div class="container">
 
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		 <?php
		        echo "<div class='alert alert-danger'>";
		        printf(__("<h1>404 Not found!</h1>","cswd"));
		        printf(__("<h4>Sorry, but the page you requested cannot be found. Please try again.</h4>","cswd"));
		 		echo "</div>";
		?>
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php get_sidebar(); ?>
        </section>
 
</div>
 
<?php get_footer(); ?>