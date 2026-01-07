<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Handbags</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">
		<div class="col-md-3 sidebar">
	            <!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Clothing</a>
                 <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">  
                     <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                              <li><a href="#">Shorts</a></li>  
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                      <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                               <li><a href="#">Night Suits</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                   <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                               <li><a href="#">Wipes</a></li>      
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                               <li><a href="#">Toys</a></li>
                                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Electronics</a>
                 <!-- ================================== MEGAMENU VERTICAL ================================== -->
<ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Routers &amp; Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png"></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paw" aria-hidden="true"></i>Shoes</a>
                 <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">  
                     <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                              <li><a href="#">Shorts</a></li>  
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                      <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                               <li><a href="#">Night Suits</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                   <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                               <li><a href="#">Wipes</a></li>      
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                               <li><a href="#">Toys</a></li>
                                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Watches</a>
                <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Routers &amp; Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png"></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Jewellery</a>
                <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">  
                     <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                              <li><a href="#">Shorts</a></li>  
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                      <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                               <li><a href="#">Night Suits</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                   <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                               <li><a href="#">Wipes</a></li>      
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                               <li><a href="#">Toys</a></li>
                                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Health and Beauty</a>
                <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Routers &amp; Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png"></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                 <!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
<!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a>
               <!-- /.dropdown-menu -->            </li><!-- /.menu-item -->
          
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->	            <div class="sidebar-module-container">
	            	
	            	<div class="sidebar-filter">
		            	<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
<h3 class="section-title">shop by</h3>
	<div class="widget-header">
		<h4 class="widget-title">Category</h4>
	</div>
	<div class="sidebar-widget-body">
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Camera
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed">
	                  Desktops
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Pants
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Bags
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">
	                  Hats
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">
	                 Accessories
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

		            	<!-- ============================================== PRICE SILDER============================================== -->
<div class="sidebar-widget wow fadeInUp" style="visibility: hidden; animation-name: none;">
	<div class="widget-header">
		<h4 class="widget-title">Price Slider</h4>
	</div>
	<div class="sidebar-widget-body m-t-10">
		<div class="price-range-holder">
      	    <span class="min-max">
                 <span class="pull-left">$200.00</span>
                 <span class="pull-right">$800.00</span>
            </span>
            <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">

            <div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-selection" style="left: 16.6667%; width: 50%;"></div><div class="slider-handle min-slider-handle" tabindex="0" style="left: 16.6667%;"></div><div class="slider-handle max-slider-handle" tabindex="0" style="left: 66.6667%;"></div></div><div class="tooltip tooltip-main top" style="left: 41.6667%; margin-left: -35px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">200 : 500</div></div><div class="tooltip tooltip-min top" style="left: 16.6667%; margin-left: -35px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">200</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 66.6667%; margin-left: -35px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">500</div></div></div><input type="text" class="price-slider" value="200,500" data="value: '200,500'" style="display: none;">
   
        </div><!-- /.price-range-holder -->
        <a href="#" class="lnk btn btn-primary">Show Now</a>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRICE SILDER : END ============================================== -->
		            	<!-- ============================================== MANUFACTURES============================================== -->
<div class="sidebar-widget wow fadeInUp" style="visibility: hidden; animation-name: none;">
	<div class="widget-header">
		<h4 class="widget-title">Manufactures</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Forever 18</a></li>
            <li><a href="#">Nike</a></li>
            <li><a href="#">Dolce &amp; Gabbana</a></li>
            <li><a href="#">Alluare</a></li>
            <li><a href="#">Chanel</a></li>
            <li><a href="#">Other Brand</a></li>
          </ul>
        <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== MANUFACTURES: END ============================================== -->
		            	<!-- ============================================== COLOR============================================== -->
<div class="sidebar-widget wow fadeInUp" style="visibility: hidden; animation-name: none;">
	<div class="widget-header">
		<h4 class="widget-title">Colors</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Red</a></li>
            <li><a href="#">Blue</a></li>
            <li><a href="#">Yellow</a></li>
            <li><a href="#">Pink</a></li>
            <li><a href="#">Brown</a></li>
            <li><a href="#">Teal</a></li>
          </ul>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== COLOR: END ============================================== -->
		            	<!-- ============================================== COMPARE============================================== -->
<div class="sidebar-widget wow fadeInUp outer-top-vs" style="visibility: hidden; animation-name: none;">
    <h3 class="section-title">Compare products</h3>
	<div class="sidebar-widget-body">
		<div class="compare-report">
			<p>You have no <span>item(s)</span> to compare</p>
		</div><!-- /.compare-report -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== COMPARE: END ============================================== -->
		            	<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp outer-top-vs" style="visibility: hidden; animation-name: none;">
	<h3 class="section-title">Product tags</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">					
			<a class="item" title="Phone" href="category.html">Phone</a>
			<a class="item active" title="Vest" href="category.html">Vest</a>
			<a class="item" title="Smartphone" href="category.html">Smartphone</a>
			<a class="item" title="Furniture" href="category.html">Furniture</a>
			<a class="item" title="T-shirt" href="category.html">T-shirt</a>
			<a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
			<a class="item" title="Sneaker" href="category.html">Sneaker</a>
			<a class="item" title="Toys" href="category.html">Toys</a>
			<a class="item" title="Rose" href="category.html">Rose</a>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->		            	<!-- <!-- ============================================== Testimonials============================================== -->
<div class="sidebar-widget  wow fadeInUp outer-top-vs " style="visibility: hidden; animation-name: none;">
	<div id="advertisement" class="advertisement owl-carousel owl-theme" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1338px; left: 0px; display: block;"><div class="owl-item" style="width: 223px;"><div class="item">
            <div class="avatar"><img src="assets/images/testimonials/member1.png" alt="Image"></div>
		<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">John Doe	<span>Abc Company</span>	</div><!-- /.container-fluid -->
        </div></div><div class="owl-item" style="width: 223px;"><div class="item">
         	<div class="avatar"><img src="assets/images/testimonials/member3.png" alt="Image"></div>
		<div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">Stephen Doe	<span>Xperia Designs</span>	</div>    
        </div></div><div class="owl-item" style="width: 223px;"><div class="item">
            <div class="avatar"><img src="assets/images/testimonials/member2.png" alt="Image"></div>
		<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">Saraha Smith	<span>Datsun &amp; Co</span>	</div><!-- /.container-fluid -->
        </div></div></div></div><!-- /.item -->

         <!-- /.item -->

        <!-- /.item -->

    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div><!-- /.owl-carousel -->
</div>
    
<!-- ============================================== Testimonials: END ============================================== -->

<div class="home-banner">
<img src="assets/images/banners/LHS-banner.jpg" alt="Image">
</div> 

	            	</div><!-- /.sidebar-filter -->
	            </div><!-- /.sidebar-module-container -->
            </div>

		<div class='col-md-9'>
			<div class="clearfix filters-container m-t-10">

	<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' );

if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );?>
	
	</div>
	</div>

	</div>
	</div>
</div>

<?php get_footer( 'shop' ); ?>
