<!doctype html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $category; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
        <script type="text/javascript">
            //<![CDATA[
            (function() {
                function asyncLoad() {
                    var urls = ["<?php echo base_url('assets/js/sstates.js'); ?>"];
                    for (var i = 0; i < urls.length; i++) {
                        var s = document.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = urls[i];
                        var x = document.getElementsByTagName('script')[0];
                        x.parentNode.insertBefore(s, x);
                    }
                }
                window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
            })();

            //]]>
            
        </script>
        <link href="<?php echo base_url('assets/css/bootstrap7524.css'); ?>" rel="stylesheet" type="text/css"  media="all"  /> 
        <link href="<?php echo base_url('assets/css/assets7524.css'); ?>" rel="stylesheet" type="text/css"  media="all"  /> 
        <link href="<?php echo base_url('assets/css/style7524.css'); ?>" rel="stylesheet" type="text/css"/>
        <!--<link href="//cdn.shopify.com/s/files/1/0308/1345/t/2/assets/style.css?7524" rel="stylesheet" type="text/css"  media="all"  />-->
        <link href="<?php echo base_url('assets/css/responsive7524.css'); ?>" rel="stylesheet" type="text/css"  media="all"  />

        <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
        <!--        <link href="//cdn.shopify.com/s/files/1/0308/1345/t/2/assets/favicon.ico?7524" rel="icon" type="image/x-icon" />-->


        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <link href="//cdn.shopify.com/s/files/1/0308/1345/t/2/assets/ie8.css?7524" rel="stylesheet" type="text/css"  media="all"  />
        <![endif]-->

        <!--[if gte IE 8]>
        <style type="text/css">.header_tiles ul.header_tiles-1 li.tile_currency select {padding: 0 0 0 8px !important;}</style>
        <![endif]-->

        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->



        <script src="<?php echo base_url('assets/js/option_selection.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>" type="text/javascript"></script>  

        <script src="<?php echo base_url('assets/js/bootstrap7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery-migrate-1.2.1.min7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/shop7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.nivoslider7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.easing.1.37524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/api.jquery7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/ajaxify-shop7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/hoverIntent7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/superfish7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/supersubs7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.mobilemenu7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/sftouchscreen7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.fancybox-1.3.47524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.bxslider.min7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.caroufredsel.min7524.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.customSelect.min7524.js'); ?>" type="text/javascript"></script>

    </head>
    <body id="welcome-to-our-store" class="template-index" >
        <div id="wrapper">

            <header id="header">
                <div class="container">
                    <!-- logo -->
                    <h1 id="site-title">
                        <a class="trs_color" href="<?php echo base_url();?>">Computer Times <br>Limited</a>
                    </h1>
                    <!-- tiles -->
                    <div class="header_tiles">

                        <ul class="header_tiles-1">
                            <!-- home -->
                            <li class="tile tile_home trs_scale">
                                <a href="/"><i class="fa fa-home"></i></a>
                            </li>
                            <!-- twitter -->
                            <li class="tile tile_twi trs_scale">
                                <a href="https://twitter.com/computertimesltd"><i class="fa fa-twitter"></i></a>
                            </li>
                            <!-- google+ -->
                            <li class="tile tile_gpl trs_scale">
                                <a href="https://google.com/computertimesltd"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <!-- facebook -->
                            <li class="tile tile_fcb trs_scale">
                                <a href="https://www.facebook.com/computertimesltd"><i class="fa fa-facebook"></i></a>
                            </li>
                            <!-- pinterest -->
                            <li class="tile tile_pin trs_scale">
                                <a href="https://www.pinterest.com/computertimesltd/"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <!-- customer -->
<!--                            <li class="tile tile_customer trs_scale">
                                <a href="/account/login" id="customer_login_link"><i class='fa fa-user'></i></a>
                            </li>-->
                            <!-- currency -->
                        </ul>
                        <!--
                                              <ul class="header_tiles-2">
                                                    <li class="tile_search trs_bg">
                                                         search form 
                                                        <form id="search_top" class="search-form" action="/search" method="get" role="search">
                                                            <input id="search-field" type="text" name="q" placeholder="Search" />
                                                            <a class="search-submit" href="javascript:document.getElementById('search_top').submit();"><i class="fa fa-arrow-circle-o-right trs_hover"></i></a>
                                                        </form>
                                                    </li>
                                                    <li class="tile_cart trs_bg">
                                                         shopping cart 
                                                        <a href="/cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <b>Cart:</b>
                                                            <span class="cart-total-items"><span class="count">0</span> Items</span>
                                                            <i class="fa fa-arrow-circle-o-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                        -->  
                    </div>
                    <!-- Navigation -->
                    <div id="navigation" style="margin-top: 25px;">
                        <nav role="navigation">
                            <ul class="sf-menu nav">                                
                                <li class="">
                                    <a href="/pages/about-us" title="">About Us</a>
                                    <ul>
                                        <li class=" first">
                                            <a class="first" href="/collections/accessories">About</a>
                                        </li>
                                        <li class="">
                                            <a class="" href="/collections/cpus">Why Us</a>
                                        </li>
                                        <li class="">
                                            <a class="" href="/collections/hard-drives">Mission & Vission</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/notebook');?>" title="">Notebook</a>
                                </li>
                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/laptop');?>" title="">Laptop</a>
                                </li>
                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/desktop');?>" title="">Desktop</a>
                                </li>
                                <li class=" last">
                                    <a href="<?php print_r(base_url().'getpagecontents/tablet');?>" title="">Tablet</a>
                                </li>
                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/printer');?>" title="">Printer</a>
                                </li>
                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/software');?>" title="">Software</a>
                                </li>
                                <li class=" last">
                                    <a href="<?php print_r(base_url().'getpagecontents/networking');?>" title="">Networking</a>
                                </li>
                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/printingaccessories');?>" title="">Printing Accessories</a>
                                </li>
                                <li class="">
                                    <a href="<?php print_r(base_url().'getpagecontents/solutions');?>" title="">Solution</a>
                                </li>
                            </ul>
                            <script>
                                jQuery(function($) {
                                    $('.sf-menu a').addClass('trs_bg');
                                });
                            </script>
                        </nav>
                    </div>
                </div>
            </header>
            
            <!-- main content -->
            <div id="main" class="container" role="main">
                <div class="row"> 
                    <!-- left column -->
                    <!-- center column -->
                    <div id="main_content" class="col-sm-12">
                        <div class="index-scope">
                            <h3 class="page_title">
                            
                                <?php
                                $str = strtoupper($category);
                                echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
                                ?>

                            </h3>
                            <div class="product-listing product-listing__index">
                                <div class="row">
                                    <?php 
                                    $rowNo = 0;
                                    foreach ($alldata_desktop as $row){
                                        if($rowNo%3==0 && $rowNo == 0)
                                        {
                                            echo '<div class = "row">';
                                        }
                                        else if ($rowNo % 3 == 0) {
                                            echo '</div><div class = "row">';
                                        }
                                        echo '<div class="col-md-4 product product__product-grid-item">
                                        <div class="">  
                                            <a href="/products/product01">
                                                <img src = "'.base_url().'images/'.$row->imagename.'" height="250px" width ="250px"/></a>
                                        </div>
                                        <div class="">
                                            <a href="/products/product01" class="product_title">
                                                '.$row->pname.'
                                            </a>
                                        </div>
                                        <div class="product_price">
                                            <span class="money">Price <img src ="'.  base_url().'images/BDT_icon.png'.'" height="23px" width ="20px">'.$row->pprice.'</span>
                                        </div>
                                    </div>';
                                        $rowNo++;
                                        
                                    }
                                    if ($rowNo > 0) {
                                        echo '</div>';
                                    }
                                    ?>
<!--                                    <div class="product product__product-grid-item col-sm-3 item_odd step3-1 step4-1">
                                        <div class="product_image-wrap">  
                                            <a href="/products/product01">
                                                <?php //echo '<img src = "'.base_url().'images/'.$alldata_desktop[0]->imagename.'" height="100px" width ="100px"/>';?>
                                            </a>
                                        </div> .prod-image-wrap 
                                        <div class="product_title-wrap">
                                            <a href="/products/product01" class="product_title">
                                                Apple iPad 2 (16GB Wi-Fi. Black)
                                            </a>
                                        </div>
                                        <div class="product_price">
                                            <span class="money">$199.00</span>
                                            <a class="product_info trs_bg" href="/products/product01"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">
                                                <input type="hidden" name="id" value="427921129" />
                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product product__product-grid-item col-sm-3 item_even step3-2 step4-2">
                                        <div class="product_image-wrap">  
                                            <a href="/products/product02">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/dell_inspiron_1520_2_medium.jpg?v=1386260727" alt="Dell Inspiron 1520" />
                                            </a>
                                        </div> .prod-image-wrap 
                                        <div class="product_title-wrap">
                                            <a href="/products/product02" class="product_title">
                                                Dell Inspiron 1520
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$60.00</span>
                                            <a class="product_info trs_bg" href="/products/product02"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">
                                                <input type="hidden" name="id" value="427921329" />
                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product product__product-grid-item col-sm-3 item_odd step3-3 step4-3">

                                        <div class="product_image-wrap">  
                                            <a href="/products/product03">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/apple_macbook_pro_13_2-7ghz_i7_1_medium.jpeg?v=1385997044" alt="Apple MacBook Pro (13&#39;&#39; 2.7GHz i7)" />
                                            </a>
                                        </div> .prod-image-wrap 


                                        <div class="product_title-wrap">
                                            <a href="/products/product03" class="product_title">
                                                Apple MacBook Pro (13'' 2.7GHz i7)
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$78.00</span>
                                            <a class="product_info trs_bg" href="/products/product03"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">
                                                <input type="hidden" name="id" value="427921429" />
                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product product__product-grid-item col-sm-3 item_even step3-1 step4-4">

                                        <div class="product_image-wrap">  
                                            <a href="/products/product04">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/iomega_ego_1_tb_usb_2-0_desktop_external_hard_drive_3_medium.jpeg?v=1385997064" alt="Iomega eGo 1 TB USB 2.0 Desktop External Hard Drive" />
                                            </a>
                                        </div> .prod-image-wrap 
                                        <div class="product_title-wrap">
                                            <a href="/products/product04" class="product_title">
                                                Iomega eGo 1 TB USB 2.0 Desktop External Hard Drive
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$399.00</span>
                                            <a class="product_info trs_bg" href="/products/product04"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">

                                                <input type="hidden" name="id" value="427921605" />


                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />

                                            </form>
                                        </div>

                                    </div>
                                    <div class="product product__product-grid-item col-sm-3 alphaitem_odd step3-2 step4-1">

                                        <div class="product_image-wrap">  
                                            <a href="/products/product05">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/microsoft_lifecam_cinema_hd_webcam_1_medium.jpeg?v=1385997075" alt="Microsoft LifeCam Cinema HD Webcam" />
                                            </a>
                                        </div> .prod-image-wrap 


                                        <div class="product_title-wrap">
                                            <a href="/products/product05" class="product_title">
                                                Microsoft LifeCam Cinema HD Webcam
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$420.00</span>
                                            <a class="product_info trs_bg" href="/products/product05"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">

                                                <input type="hidden" name="id" value="427921721" />


                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />

                                            </form>
                                        </div>

                                    </div>		










                                    <div class="product product__product-grid-item col-sm-3 item_even step3-3 step4-2">

                                        <div class="product_image-wrap">  
                                            <a href="/products/product06">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/logitech_v450_nano_cordless_laser_mouse_for_notebooks_3_medium.jpeg?v=1385997082" alt="Logitech V450 Nano Cordless Laser Mouse for Notebooks" />
                                            </a>
                                        </div> .prod-image-wrap 


                                        <div class="product_title-wrap">
                                            <a href="/products/product06" class="product_title">
                                                Logitech V450 Nano Cordless Laser Mouse for Notebooks
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$170.00</span>
                                            <a class="product_info trs_bg" href="/products/product06"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">

                                                <input type="hidden" name="id" value="427921777" />


                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />

                                            </form>
                                        </div>

                                    </div>		










                                    <div class="product product__product-grid-item col-sm-3 item_odd step3-1 step4-3">

                                        <div class="product_image-wrap">  
                                            <a href="/products/product07">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/gateway_nv7923u_17-3-inch_laptop_3_medium.jpeg?v=1385997098" alt="Gateway NV7922u 17.3-Inch Laptop" />
                                            </a>
                                        </div> .prod-image-wrap 


                                        <div class="product_title-wrap">
                                            <a href="/products/product07" class="product_title">
                                                Gateway NV7922u 17.3-Inch Laptop
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$320.00</span>
                                            <a class="product_info trs_bg" href="/products/product07"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">

                                                <input type="hidden" name="id" value="427922101" />


                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />

                                            </form>
                                        </div>

                                    </div>		










                                    <div class="product product__product-grid-item col-sm-3 item_even step3-2 step4-4">

                                        <div class="product_image-wrap">  
                                            <a href="/products/product08">
                                                <img src="//cdn.shopify.com/s/files/1/0308/1345/products/corsair_new_carbide_pc_cases_1_medium.jpeg?v=1385997110" alt="Corsair New Carbide PC Cases" />
                                            </a>
                                        </div> .prod-image-wrap 


                                        <div class="product_title-wrap">
                                            <a href="/products/product08" class="product_title">
                                                Corsair New Carbide PC Cases
                                            </a>
                                        </div>

                                        <div class="product_price">
                                            <span class="money">$265.00</span>
                                            <a class="product_info trs_bg" href="/products/product08"><i class="fa fa-info"></i></a>
                                            <form method="post" action="/cart/add">

                                                <input type="hidden" name="id" value="427922213" />


                                                <input class="product_add trs_bg" class="btn" type="submit" value="" />

                                            </form>
                                        </div>

                                    </div>		-->

                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- right column -->




                </div>
            </div>
            <!-- bottom -->
            <div id="bottom" class="container">
                <div class="row">

                    <div class="bottom_block_1 col-sm-3">
                        <h3>About our store</h3>
                        <p>We are a company to sale and service of Computer and its peripheral.</p>
                    </div>

                    <div class="bottom_block_2 col-sm-3">
                        <h3>Catalog</h3>
                        <ul class="list">

                            <li><a href="/collections/accessories" title="">Accessories</a></li>

                            <li><a href="/collections/cpus" title="">CPUs</a></li>

                            <li><a href="/collections/hard-drives" title="">Hard Drives</a></li>

                            <li><a href="/collections/keyboards-mice" title="">Keyboards / Mice </a></li>

                            <li><a href="/collections/monitors" title="">Monitors </a></li>

                        </ul>
                    </div>

                    <div class="bottom_block_3 col-sm-3">
                        <h3>Links</h3>
                        <ul class="list">

                            <li><a href="/" title="">Home</a></li>

                            <li><a href="/pages/about-us" title="">About Us</a></li>

                            <li><a href="/blogs/news" title="">Blog</a></li>

                            <li><a href="/pages/documentation" title="">Documentation</a></li>

                            <li><a href="/pages/contacts" title="">Contacts</a></li>

                        </ul>
                    </div>

                    <div class="bottom_block_4 col-sm-3">
                        <h3>Contacts</h3>
                        <p class="adr">Shop # 234, Level # 2,Shuvastu Archade, Elephant Road, Dhaka </p>
                        <p class="tel"><i class="fa fa-phone-square"></i>Tel: +8804477970416</p>
                    </div>

                </div>
            </div>
            <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
            <div id="push"></div>
        </div><!-- end of #wrapper -->
        <!-- footer -->
        <footer id="footer">
            <div class="container copyright" role="contentinfo">
                &copy; 2014  All Rights Reserved. Design by <a href="//templatemonster.com">computertimesltd.com</a>. <a href="http://www.computertimesltd.com" target="_blank">Computer Times</a>.
            </div>
        </footer>
        <script src="<?php echo base_url('assets/js/currencies.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jqueryCurrencies.js'); ?>" type="text/javascript"></script>
        <script>


            Currency.format = 'money_format';


            var shopCurrency = 'USD';

            /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
            Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
            Currency.money_format[shopCurrency] = "${{amount}}";

            /* Default currency */
            var defaultCurrency = 'USD' || shopCurrency;

            /* Cookie currency */
            var cookieCurrency = Currency.cookie.read();

            /* Fix for customer account pages */
            jQuery('span.money span.money').each(function() {
                jQuery(this).parents('span.money').removeClass('money');
            });

            /* Saving the current price */
            jQuery('span.money').each(function() {
                jQuery(this).attr('data-currency-USD', jQuery(this).html());
            });

            // If there's no cookie.
            if (cookieCurrency == null) {
                if (shopCurrency !== defaultCurrency) {
                    Currency.convertAll(shopCurrency, defaultCurrency);
                }
                else {
                    Currency.currentCurrency = defaultCurrency;
                }
            }
            // If the cookie value does not correspond to any value in the currency dropdown.
            else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
                Currency.currentCurrency = shopCurrency;
                Currency.cookie.write(shopCurrency);
            }
            else if (cookieCurrency === shopCurrency) {
                Currency.currentCurrency = shopCurrency;
            }
            else {
                Currency.convertAll(shopCurrency, cookieCurrency);
            }

            jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
                var newCurrency = jQuery(this).val();
                Currency.convertAll(Currency.currentCurrency, newCurrency);
                jQuery('.selected-currency').text(Currency.currentCurrency);
            });

            var original_selectCallback = window.selectCallback;
            var selectCallback = function(variant, selector) {
                original_selectCallback(variant, selector);
                Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
                jQuery('.selected-currency').text(Currency.currentCurrency);
            };

            jQuery('.selected-currency').text(Currency.currentCurrency);

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#currencies').customSelect();
            });
        </script>
    </body>
</html>