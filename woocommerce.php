<?php get_header(); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Blog</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
					<div class="blog-post  wow fadeInUp">
	<?php woocommerce_content(); ?>
	
</div>

<?php get_template_part( 'right-sidebar' ); ?>
	<!-- ============================================== CATEGORY : END ============================================== -->						
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->



<?php get_footer(); ?>