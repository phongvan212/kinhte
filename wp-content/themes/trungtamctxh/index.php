<?php get_header(); ?>
<div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<?php echo do_shortcode(' [image-carousel] '); ?>
        </div>
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            

            <?php echo do_shortcode(' [sc_top_news] '); ?>
 
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>