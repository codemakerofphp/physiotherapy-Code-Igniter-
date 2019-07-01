

<?php 
    $header_phone = $this->db->where('name','header-phone')->get('tbl_general')->row()->value;
    
    $header_email = $this->db->where('name','header-email')->get('tbl_general')->row()->value;
    
    $footer_address = $this->db->where('name','footer-address')->get('tbl_general')->row()->value;
    
    $footer_phone = $this->db->where('name','footer-phone')->get('tbl_general')->row()->value;
    
    $footer_email = $this->db->where('name','footer-email')->get('tbl_general')->row()->value;
    
    $footer_website = $this->db->where('name','footer-website')->get('tbl_general')->row()->value;
    
    $call_now_title = $this->db->where('name','call-us-now-title')->get('tbl_general')->row()->value;
    
    $call_now_value = $this->db->where('name','call-us-now-value')->get('tbl_general')->row()->value;
    
    $blogs  = $this->db->order_by('id','desc')->limit('3')->get('tbl_blog')->result();
    
    ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- Page Title -->
        <title></title>
        <!-- Favicon and Touch Icons -->
        <link href="<?php echo base_url(); ?>front_end_assets/images/favicon.png" rel="shortcut icon" type="image/png">
        <!-- Stylesheet -->
        <link href="<?php echo base_url(); ?>front_end_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>front_end_assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>front_end_assets/css/animate.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>front_end_assets/css/css-plugin-collections.css" rel="stylesheet"/>
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins" href="<?php echo base_url(); ?>front_end_assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
        <!-- CSS | Main style file -->
        <link href="<?php echo base_url(); ?>front_end_assets/css/style-main.css" rel="stylesheet" type="text/css">
        <!-- CSS | Theme Color -->
        <link href="<?php echo base_url(); ?>front_end_assets/css/colors/theme-skin-sky-blue-light.css" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="<?php echo base_url(); ?>front_end_assets/css/preloader.css" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="<?php echo base_url(); ?>front_end_assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="<?php echo base_url(); ?>front_end_assets/css/responsive.css" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
        <!-- external javascripts -->
        <script src="<?php echo base_url(); ?>front_end_assets/js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url(); ?>front_end_assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>front_end_assets/js/bootstrap.min.js"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="<?php echo base_url(); ?>front_end_assets/js/jquery-plugin-collection.js"></script>
        <!-- Revolution Slider 5.x CSS settings -->
        <link  href="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
        <link  href="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
        <link  href="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
        <!-- Revolution Slider 5.x SCRIPTS -->
        <script src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <!-- Revolution Slider 5.x EXTENSIONS  --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>front_end_assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
    </head>
    <body>
        <!--Start main area-->
        <div id="wrapper">
            <!-- Start header area-->
            <header id="header" class="header">
                <div class="header-top sm-text-center bg-theme-colored">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <nav>
                                    <ul class="list-inline sm-text-center text-left flip mt-5">
                                        <li> <a class="text-white" href="<?php echo base_url('site/faq') ?>">FAQ</a> </li>
                                        <li class="text-white">|</li>
                                        <li> <a class="text-white" href="<?php echo base_url('site/contact') ?>">Support</a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6">
                                <div class="widget m-0 mt-5 no-border">
                                    <ul class="list-inline text-right sm-text-center">
                                        <li class="pl-10 pr-10 mb-0 pb-0">
                                            <div class="header-widget text-white"><i class="fa fa-phone"></i> <?php echo $header_phone; ?> </div>
                                        </li>
                                        <li class="pl-10 pr-10 mb-0 pb-0">
                                            <div class="header-widget text-white"><i class="fa fa-envelope-o"></i> <?php echo $header_email; ?> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 text-right flip sm-text-center">
                                <div class="widget m-0">
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm">
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed bg-lighter">
                        <div class="container">
                            <nav id="menuzord-right" class="menuzord orange no-bg">
                                <a class="menuzord-brand pull-left flip" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>front_end_assets/images/logo-wide.png" alt=""></a>
                                <ul class="menuzord-menu">
                                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/about_us">About</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/services">Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/blog">Blog</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!--End header area-->
            <!--Start content area-->
            <?php $this->load->view($contents); ?>
            <!--End Contact area-->
            <!-- Start footer area-->
            <footer id="footer" class="footer bg-black-222">
                <div class="container pb-50">
                    <div class="row border-bottom-black">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <img class="mt-10 mb-20" alt="" src="<?php echo base_url() ?>front_end_assets/images/logo-wide-white.png">            
                                <p><?php echo $footer_address;?></p>
                                <ul class="list-inline mt-5">
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?php echo $footer_phone;?></a> </li>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?php echo $footer_email;?></a> </li>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?php echo $footer_website;?></a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Latest Blog</h5>
                                <div class="latest-posts">
                                    <?php foreach ($blogs as $key => $blog_value) { ?>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a href="<?php echo base_url('site/blog_details/'.$blog_value->id); ?>" class="post-thumb"><img alt="" src="<?php echo base_url($blog_value->photo); ?>" style="width: 80px; height: 55px;"></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-5"><a href="<?php echo base_url('site/blog_details/'.$blog_value->id); ?>"><?php echo $blog_value->title; ?></a></h5>
                                            <p class="post-date mb-0 font-12"><?php echo date('M d, Y',strtotime($blog_value->date)); ?></p>
                                        </div>
                                    </article>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Useful Links</h5>
                                <ul class="list angle-double-right list-border">
                                    <li><a href="<?php echo base_url('site/our_mission') ?>">Our Mission</a></li>
                                    <li><a href="<?php echo base_url('site/our_vision') ?>">Our Vision</a></li>
                                    <li><a href="<?php echo base_url('site/terms_policy') ?>">Terms & Condition</a></li>
                                    <li><a href="<?php echo base_url('site/blog') ?>">Blog</a></li>
                                    <li><a href="<?php echo base_url('site/training') ?>">Training</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Facebook Page</h5>
                                <div class="opening-hours">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhrsoftbd&tabs&width=340&height=70&small_header=true&adapt_container_width=false&hide_cover=true&show_facepile=false&appId" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-5 col-md-offset-3 mt-20">
                            <div class="pull-right">
                                <ul class="styled-icons icon-bordered small square list-inline mt-10">
                                    <li><a target="_blank" href="http://facebook.com"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li><a target="_blank" href="http://twitter.com"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li><a target="_blank" href="http://skype.com"><i class="fa fa-skype text-white"></i></a></li>
                                    <li><a target="_blank" href="http://youtube.com"><i class="fa fa-youtube text-white"></i></a></li>
                                </ul>
                            </div>
                            <div class="pull-left">
                                <h5 class="text-white"><?php echo $call_now_title; ?></h5>
                                <h4 class="text-gray"><?php echo $call_now_value; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid copy-right p-20 bg-black-333">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <p class="font-11 text-black-777 m-0">Copyright &copy;<?php echo date('Y'); ?> HRSOFTBD. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!--End footer area-->
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->
        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="<?php echo base_url(); ?>front_end_assets/js/custom.js"></script>
    </body>
</html>

