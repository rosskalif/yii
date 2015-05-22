<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use home\assets\AppAsset;
use home\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
    $this->head();
    list($path, $link) = $this->getAssetManager()->publish('@theme/star/home/assets');
    $this->registerCssFile($link . '/css/camera.css', ['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerCssFile($link . '/css/owl.carousel.css', ['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerCssFile($link . '/css/owl.transitions.css', ['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerCssFile($link . '/css/jquery.custom-scrollbar.css', ['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerCssFile($link . '/css/style.css', ['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerCssFile($link . '/css/font-awesome.min.css', ['depends' => [\yii\web\JqueryAsset::className()]]);

    $this->registerJsFile($link . '/js/modernizr.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
    ?>
</head>
<body >
<?php $this->beginBody() ?>
<div class="boxed_layout relative w_xs_auto">
<header role="banner">
<!--header top part-->
<section class="h_top_part">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                <p class="f_size_small">Welcome visitor can you	<a href="#" data-popup="#login_popup">Log In</a> or <a href="#">Create an Account</a> </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                <p class="f_size_small">Call us toll free: <b class="color_dark">(123) 456-7890</b></p>
            </div>
            <nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                    <li><a href="#" class="default_t_color">My Account</a></li>
                    <li><a href="#" class="default_t_color">Orders List</a></li>
                    <li><a href="#" class="default_t_color">Wishlist</a></li>
                    <li><a href="#" class="default_t_color">Checkout</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!--header bottom part-->
<section class="h_bot_part container">
    <div class="clearfix row">
        <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
            <a href="index.html" class="logo m_xs_bottom_15 d_xs_inline_b">
                <img src="<?= $link?>/images/logo.png" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
            <ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
                <!--like-->
                <li>
                    <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c">12</span></a>
                </li>
                <li class="m_left_5">
                    <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-files-o f_size_ex_large"></i><span class="count circle t_align_c">3</span></a>
                </li>
                <!--language settings-->
                <li class="m_left_5 relative container3d">
                    <a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="lang_button"><img class="d_inline_middle m_right_10 m_mxs_right_0" src="<?= $link?>/images/flag_en.jpg" alt=""><span class="d_mxs_none">English</span></a>
                    <ul class="dropdown_list top_arrow color_light">
                        <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?= $link?>/images/flag_en.jpg" alt="">English</a></li>
                        <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?= $link?>/images/flag_fr.jpg" alt="">French</a></li>
                        <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?= $link?>/images/flag_g.jpg" alt="">German</a></li>
                        <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?= $link?>/images/flag_i.jpg" alt="">Italian</a></li>
                        <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?= $link?>/images/flag_s.jpg" alt="">Spanish</a></li>
                    </ul>
                </li>
                <!--currency settings-->
                <li class="m_left_5 relative container3d">
                    <a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="currency_button"><span class="scheme_color">$</span> <span class="d_mxs_none">US Dollar</span></a>
                    <ul class="dropdown_list top_arrow color_light">
                        <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">$</span> US Dollar</a></li>
                        <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#8364;</span> Euro</a></li>
                        <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#163;</span> Pound</a></li>
                    </ul>
                </li>
                <!--shopping cart-->
                <li class="m_left_5 relative container3d" id="shopping_button">
                    <a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
										<span class="d_inline_middle shop_icon m_mxs_right_0">
											<i class="fa fa-shopping-cart"></i>
											<span class="count tr_delay_hover type_2 circle t_align_c">3</span>
										</span>
                        <b class="d_mxs_none">$355</b>
                    </a>
                    <div class="shopping_cart top_arrow tr_all_hover r_corners">
                        <div class="f_size_medium sc_header">Recently added item(s)</div>
                        <ul class="products_list">
                            <li>
                                <div class="clearfix">
                                    <!--product image-->
                                    <img class="f_left m_right_10" src="<?= $link?>/images/shopping_c_img_1.jpg" alt="">
                                    <!--product description-->
                                    <div class="f_left product_description">
                                        <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                        <span class="f_size_medium">Product Code PS34</span>
                                    </div>
                                    <!--product price-->
                                    <div class="f_left f_size_medium">
                                        <div class="clearfix">
                                            1 x <b class="color_dark">$99.00</b>
                                        </div>
                                        <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <!--product image-->
                                    <img class="f_left m_right_10" src="<?= $link?>/images/shopping_c_img_2.jpg" alt="">
                                    <!--product description-->
                                    <div class="f_left product_description">
                                        <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                        <span class="f_size_medium">Product Code PS34</span>
                                    </div>
                                    <!--product price-->
                                    <div class="f_left f_size_medium">
                                        <div class="clearfix">
                                            1 x <b class="color_dark">$99.00</b>
                                        </div>
                                        <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <!--product image-->
                                    <img class="f_left m_right_10" src="<?= $link?>/images/shopping_c_img_3.jpg" alt="">
                                    <!--product description-->
                                    <div class="f_left product_description">
                                        <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                        <span class="f_size_medium">Product Code PS34</span>
                                    </div>
                                    <!--product price-->
                                    <div class="f_left f_size_medium">
                                        <div class="clearfix">
                                            1 x <b class="color_dark">$99.00</b>
                                        </div>
                                        <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!--total price-->
                        <ul class="total_price bg_light_color_1 t_align_r color_dark">
                            <li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$0.00</span></li>
                            <li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$37.00</span></li>
                            <li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15">$999.00</b></li>
                        </ul>
                        <div class="sc_footer t_align_c">
                            <a href="#" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
                            <a href="#" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--main menu container-->
<section class="menu_wrap relative">
    <div class="container clearfix">
        <!--button for responsive menu-->
        <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
            <span class="centered_db r_corners"></span>
            <span class="centered_db r_corners"></span>
            <span class="centered_db r_corners"></span>
        </button>
        <!--main menu-->
        <nav role="navigation" class="f_left f_xs_none d_xs_none">
            <ul class="horizontal_list main_menu clearfix">
                <li class="current relative f_xs_none m_xs_bottom_5"><a href="index.html" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            <li><a class="color_dark tr_delay_hover" href="index.html">Home Variant 1</a></li>
                            <li><a class="color_dark tr_delay_hover" href="index_layout_2.html">Home Variant 2</a></li>
                            <li><a class="color_dark tr_delay_hover" href="index_layout_wide.html">Home Variant 3</a></li>
                            <li><a class="color_dark tr_delay_hover" href="index_corporate.html">Home Variant 4</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="index_layout_wide.html" class="tr_delay_hover color_light tt_uppercase"><b>Sliders</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            <li><a class="color_dark tr_delay_hover" href="index_layout_wide.html">Revolution Slider</a></li>
                            <li><a class="color_dark tr_delay_hover" href="index.html">Camera Slider</a></li>
                            <li><a class="color_dark tr_delay_hover" href="index_layout_2.html">Flex Slider</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="category_grid.html" class="tr_delay_hover color_light tt_uppercase"><b>Shop</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                        <div class="f_left f_xs_none">
                            <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Dresses</b>
                            <ul class="sub_menu first">
                                <li><a class="color_dark tr_delay_hover" href="#">Evening Dresses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Casual Dresses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Party Dresses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Maxi Dresses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Midi Dresses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Strapless Dresses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Day Dresses</a></li>
                            </ul>
                        </div>
                        <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                            <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Accessories</b>
                            <ul class="sub_menu">
                                <li><a class="color_dark tr_delay_hover" href="#">Bags and Purces</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Belts</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Scarves</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Gloves</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Jewellery</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Sunglasses</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Hair Accessories</a></li>
                            </ul>
                        </div>
                        <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                            <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Tops</b>
                            <ul class="sub_menu">
                                <li><a class="color_dark tr_delay_hover" href="#">Evening Tops</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Long Sleeved</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Short Sleeved</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Sleeveless</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Tanks</a></li>
                                <li><a class="color_dark tr_delay_hover" href="#">Tunics</a></li>
                            </ul>
                        </div>
                        <img src="<?= $link?>/images/woman_image_1.jpg" class="d_sm_none f_right m_bottom_10" alt="">
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="#" class="tr_delay_hover color_light tt_uppercase"><b>Portfolio</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            <li><a class="color_dark tr_delay_hover" href="portfolio_two_columns.html">Portfolio 2 Columns</a></li>
                            <li><a class="color_dark tr_delay_hover" href="portfolio_three_columns.html">Portfolio 3 Columns</a></li>
                            <li><a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">Portfolio 4 Columns</a></li>
                            <li><a class="color_dark tr_delay_hover" href="portfolio_masonry.html">Masonry Portfolio</a></li>
                            <li><a class="color_dark tr_delay_hover" href="portfolio_single_1.html">Single Portfolio Post v1</a></li>
                            <li><a class="color_dark tr_delay_hover" href="portfolio_single_2.html">Single Portfolio Post v2</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="category_grid.html" class="tr_delay_hover color_light tt_uppercase"><b>Pages</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            <li><a class="color_dark tr_delay_hover" href="category_grid.html">Grid View Category Page</a></li>
                            <li><a class="color_dark tr_delay_hover" href="category_list.html">List View Category Page</a></li>
                            <li><a class="color_dark tr_delay_hover" href="category_no_products.html">Category Page Without Products</a></li>
                            <li><a class="color_dark tr_delay_hover" href="product_page_sidebar.html">Product Page With Sidebar</a></li>
                            <li><a class="color_dark tr_delay_hover" href="full_width_product_page.html">Full Width Product Page</a></li>
                            <li><a class="color_dark tr_delay_hover" href="wishlist.html">Wishlist</a></li>
                            <li><a class="color_dark tr_delay_hover" href="compare_products.html">Compare Products</a></li>
                            <li><a class="color_dark tr_delay_hover" href="checkout.html">Checkout</a></li>
                            <li><a class="color_dark tr_delay_hover" href="manufacturers.html">Manufacturers</a></li>
                            <li><a class="color_dark tr_delay_hover" href="manufacturer_details.html">Manufacturer Page</a></li>
                            <li><a class="color_dark tr_delay_hover" href="orders_list.html">Orders List</a></li>
                            <li><a class="color_dark tr_delay_hover" href="order_details.html">Order Details</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="blog.html" class="tr_delay_hover color_light tt_uppercase"><b>Blog</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            <li><a class="color_dark tr_delay_hover" href="blog.html">Blog page</a></li>
                            <li><a class="color_dark tr_delay_hover" href="blog_post.html">Single Blog Post page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="features_shortcodes.html" class="tr_delay_hover color_light tt_uppercase"><b>Features</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            <li><a class="color_dark tr_delay_hover" href="features_shortcodes.html">Shortcodes</a></li>
                            <li><a class="color_dark tr_delay_hover" href="features_typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="contact.html" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
            </ul>
        </nav>
        <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
            <i class="fa fa-search"></i>
        </button>
    </div>
    <!--search form-->
    <div class="searchform_wrap tf_xs_none tr_all_hover">
        <div class="container vc_child h_inherit relative">
            <form role="search" class="d_inline_middle full_width">
                <input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large">
            </form>
            <button class="close_search_form tr_all_hover d_xs_none color_dark">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>
</section>
</header>
<?= $content?>;
<footer id="footer">
    <div class="footer_top_part">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <h3 class="color_light_2 m_bottom_20">About</h3>
                    <p class="m_bottom_25">Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque.</p>
                    <!--social icons-->
                    <ul class="clearfix horizontal_list social_icons">
                        <li class="facebook m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
                            <a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="google_plus m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="rss m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-rss"></i>
                            </a>
                        </li>
                        <li class="pinterest m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li class="instagram m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="linkedin m_bottom_5 m_sm_left_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="vimeo m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-vimeo-square"></i>
                            </a>
                        </li>
                        <li class="youtube m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </li>
                        <li class="flickr m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-flickr"></i>
                            </a>
                        </li>
                        <li class="envelope m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <h3 class="color_light_2 m_bottom_20">The Service</h3>
                    <ul class="vertical_list">
                        <li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Vendor contact<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Front page<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Virtuemart categories<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <h3 class="color_light_2 m_bottom_20">Information</h3>
                    <ul class="vertical_list">
                        <li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">New collection<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Best sellers<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h3 class="color_light_2 m_bottom_20">Newsletter</h3>
                    <p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <form id="newsletter">
                        <input type="email" placeholder="Your email address" class="m_bottom_20 r_corners f_size_medium full_width" name="newsletter-email">
                        <button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--copyright part-->
    <div class="footer_bottom_part">
        <div class="container clearfix t_mxs_align_c">
            <p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2014 <span class="color_light">Flatastic</span>. All Rights Reserved.</p>
            <ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
                <li><img src="<?= $link?>/images/payment_img_1.png" alt=""></li>
                <li class="m_left_5"><img src="<?= $link?>/images/payment_img_2.png" alt=""></li>
                <li class="m_left_5"><img src="<?= $link?>/images/payment_img_3.png" alt=""></li>
                <li class="m_left_5"><img src="<?= $link?>/images/payment_img_4.png" alt=""></li>
                <li class="m_left_5"><img src="<?= $link?>/images/payment_img_5.png" alt=""></li>
            </ul>
        </div>
    </div>
</footer>
</div>
<!--social widgets-->
<ul class="social_widgets d_xs_none">
    <!--facebook-->
    <li class="relative">
        <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
<!--            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>-->
        </div>
    </li>
    <!--twitter feed-->
    <li class="relative">
        <button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Latest Tweets</h3>
            <div class="twitterfeed m_bottom_25"></div>
            <a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
        </div>
    </li>
    <!--contact form-->
    <li class="relative">
        <button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Contact Us</h3>
            <p class="f_size_medium m_bottom_15">Lorem ipsum dolor sit amet, consectetuer adipis mauris</p>
            <form id="contactform" class="mini">
                <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" placeholder="Your name">
                <input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" placeholder="Email">
                <textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="cf_message"></textarea>
                <button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
            </form>
        </div>
    </li>
    <!--contact info-->
    <li class="relative">
        <button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Store Location</h3>
            <ul class="c_info_list">
                <li class="m_bottom_10">
                    <div class="clearfix m_bottom_15">
                        <i class="fa fa-map-marker f_left color_dark"></i>
                        <p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>
                    </div>
<!--                    <iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>-->
                </li>
                <li class="m_bottom_10">
                    <div class="clearfix m_bottom_10">
                        <i class="fa fa-phone f_left color_dark"></i>
                        <p class="contact_e">800-559-65-80</p>
                    </div>
                </li>
                <li class="m_bottom_10">
                    <div class="clearfix m_bottom_10">
                        <i class="fa fa-envelope f_left color_dark"></i>
                        <a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
                    </div>
                </li>
                <li>
                    <div class="clearfix">
                        <i class="fa fa-clock-o f_left color_dark"></i>
                        <p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
                    </div>
                </li>
            </ul>
        </div>
    </li>
</ul>
<!--login popup-->
<div class="popup_wrap d_none" id="login_popup">
    <section class="popup r_corners shadow">
        <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
        <h3 class="m_bottom_20 color_dark">Log In</h3>
        <form>
            <ul>
                <li class="m_bottom_15">
                    <label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
                    <input type="text" name="" id="username" class="r_corners full_width">
                </li>
                <li class="m_bottom_25">
                    <label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
                    <input type="password" name="" id="password" class="r_corners full_width">
                </li>
                <li class="m_bottom_15">
                    <input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
                </li>
                <li class="clearfix m_bottom_30">
                    <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
                    <div class="f_right f_size_medium f_mxs_none">
                        <a href="#" class="color_dark">Forgot your password?</a><br>
                        <a href="#" class="color_dark">Forgot your username?</a>
                    </div>
                </li>
            </ul>
        </form>
        <footer class="bg_light_color_1 t_mxs_align_c">
            <h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
            <a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
        </footer>
    </section>
</div>
<!--custom popup-->
<div class="popup_wrap d_none" id="quick_view_product">
    <section class="popup r_corners shadow">
        <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
        <div class="clearfix">
            <div class="custom_scrollbar">
                <!--left popup column-->
                <div class="f_left half_column">
                    <div class="relative d_inline_b m_bottom_10 qv_preview">
                        <span class="hot_stripe"><img src="<?= $link?>/images/sale_product.png" alt=""></span>
                        <img src="<?= $link?>/images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
                    </div>
                    <!--carousel-->
                    <div class="relative qv_carousel_wrap m_bottom_20">
                        <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
                            <i class="fa fa-angle-left "></i>
                        </button>
                        <ul class="qv_carousel d_inline_middle">
                            <li data-src="<?= $link?>/images/quick_view_img_1.jpg"><img src="<?= $link?>/images/quick_view_img_4.jpg" alt=""></li>
                            <li data-src="<?= $link?>/images/quick_view_img_2.jpg"><img src="<?= $link?>/images/quick_view_img_5.jpg" alt=""></li>
                            <li data-src="<?= $link?>/images/quick_view_img_3.jpg"><img src="<?= $link?>/images/quick_view_img_6.jpg" alt=""></li>
                            <li data-src="<?= $link?>/images/quick_view_img_1.jpg"><img src="<?= $link?>/images/quick_view_img_4.jpg" alt=""></li>
                            <li data-src="<?= $link?>/images/quick_view_img_2.jpg"><img src="<?= $link?>/images/quick_view_img_5.jpg" alt=""></li>
                            <li data-src="<?= $link?>/images/quick_view_img_3.jpg"><img src="<?= $link?>/images/quick_view_img_6.jpg" alt=""></li>
                        </ul>
                        <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
                            <i class="fa fa-angle-right "></i>
                        </button>
                    </div>
                    <div class="d_inline_middle">Share this:</div>
                    <div class="d_inline_middle m_left_5">
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                            <a class="addthis_button_preferred_1"></a>
                            <a class="addthis_button_preferred_2"></a>
                            <a class="addthis_button_preferred_3"></a>
                            <a class="addthis_button_preferred_4"></a>
                            <a class="addthis_button_compact"></a>
                            <a class="addthis_counter addthis_bubble_style"></a>
                        </div>
                        <!-- AddThis Button END -->
                    </div>
                </div>
                <!--right popup column-->
                <div class="f_right half_column">
                    <!--description-->
                    <h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
                    <div class="m_bottom_10">
                        <!--rating-->
                        <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
                            <li class="active">
                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                <i class="fa fa-star active tr_all_hover"></i>
                            </li>
                            <li class="active">
                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                <i class="fa fa-star active tr_all_hover"></i>
                            </li>
                            <li class="active">
                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                <i class="fa fa-star active tr_all_hover"></i>
                            </li>
                            <li class="active">
                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                <i class="fa fa-star active tr_all_hover"></i>
                            </li>
                            <li>
                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                <i class="fa fa-star active tr_all_hover"></i>
                            </li>
                        </ul>
                        <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
                    </div>
                    <hr class="m_bottom_10 divider_type_3">
                    <table class="description_table m_bottom_10">
                        <tr>
                            <td>Manufacturer:</td>
                            <td><a href="#" class="color_dark">Chanel</a></td>
                        </tr>
                        <tr>
                            <td>Availability:</td>
                            <td><span class="color_green">in stock</span> 20 item(s)</td>
                        </tr>
                        <tr>
                            <td>Product Code:</td>
                            <td>PS06</td>
                        </tr>
                    </table>
                    <h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
                    <table class="description_table m_bottom_5">
                        <tr>
                            <td>Product Length:</td>
                            <td><span class="color_dark">10.0000M</span></td>
                        </tr>
                        <tr>
                            <td>Product Weight:</td>
                            <td>10.0000KG</td>
                        </tr>
                    </table>
                    <hr class="divider_type_3 m_bottom_10">
                    <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
                    <hr class="divider_type_3 m_bottom_15">
                    <div class="m_bottom_15">
                        <s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
                    </div>
                    <table class="description_table type_2 m_bottom_15">
                        <tr>
                            <td class="v_align_m">Size:</td>
                            <td class="v_align_m">
                                <div class="custom_select f_size_medium relative d_inline_middle">
                                    <div class="select_title r_corners relative color_dark">s</div>
                                    <ul class="select_list d_none"></ul>
                                    <select name="product_name">
                                        <option value="s">s</option>
                                        <option value="m">m</option>
                                        <option value="l">l</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="v_align_m">Quantity:</td>
                            <td class="v_align_m">
                                <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                                    <button class="bg_tr d_block f_left" data-direction="down">-</button>
                                    <input type="text" name="" readonly value="1" class="f_left">
                                    <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="clearfix m_bottom_15">
                        <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
                        <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
                        <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
                        <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
    <?php
    $tmpJs = ["js/jquery-2.1.0.min.js","js/jquery-migrate-1.2.1.min.js","js/retina.js","js/camera.min.js","js/jquery.easing.1.3.js",
        "js/waypoints.min.js","js/jquery.isotope.min.js","js/owl.carousel.min.js","js/jquery.tweet.min.js","js/jquery.custom-scrollbar.js","js/scripts.js",
    ];
    foreach($tmpJs as $v){
        $this->registerJsFile($link . '/'.$v, ['depends' => [\yii\web\JqueryAsset::className()]]);
    }
    ?>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
