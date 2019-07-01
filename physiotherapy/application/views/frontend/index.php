

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
        <div class="container-fluid p-0">
            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>
                        <?php foreach ($sliders as $key => $slider_value) {
                            if ($key == 0) {
                            ?>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url($slider_value->photo); ?>" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url($slider_value->photo); ?>"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                                id="rs-1-layer-1"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['-80']"
                                data-fontsize="['64','64','54','24']"
                                data-lineheight="['95']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; font-weight:700;"><?php echo $slider_value->title_one; ?> <span class="text-theme-colored"><?php echo $slider_value->title_two; ?></span>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-center font-raleway text-white" 
                                id="rs-1-layer-2"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['0']"
                                data-fontsize="['18']"
                                data-lineheight="['34']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1400" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; font-weight:500;"><?php echo $slider_value->body; ?>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" 
                                id="rs-1-layer-3"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['80']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1600" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-lg btn-circled mr-10" href="#">Signup Now</a> <a class="btn btn-colored btn-lg btn-circled btn-theme-colored" href="<?php echo base_url('site/silder_details/'.$slider_value->id); ?>">View Details</a>
                            </div>
                        </li>
                        <?php }elseif ($key == 1) { ?>
                        <!-- SLIDE 2 -->
                        <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url($slider_value->photo); ?>" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url($slider_value->photo); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                                id="rs-2-layer-1"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['-80']"
                                data-fontsize="['64','64','54','24']"
                                data-lineheight="['95']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; font-weight:700;"><?php echo $slider_value->title_one; ?> <span class="text-theme-colored"><?php echo $slider_value->title_two; ?></span>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-center font-raleway text-white" 
                                id="rs-2-layer-2"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['0']"
                                data-fontsize="['18']"
                                data-lineheight="['34']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1200" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; font-weight:500;"><?php echo $slider_value->body; ?>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" 
                                id="rs-2-layer-3"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['80']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1400" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-lg btn-circled mr-10" href="#">Signup Now</a> <a class="btn btn-colored btn-lg btn-circled btn-theme-colored" href="<?php echo base_url('site/silder_details/'.$slider_value->id); ?>">View Details</a>
                            </div>
                        </li>
                        <?php }elseif ($key == 2) { ?>
                        <!-- SLIDE 3 -->
                        <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url($slider_value->photo); ?>" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url($slider_value->photo); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                                id="rs-3-layer-1"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['-80']"
                                data-fontsize="['64','64','54','24']"
                                data-lineheight="['95']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; font-weight:700;"><?php echo $slider_value->title_one; ?> <span class="text-theme-colored"><?php echo $slider_value->title_two; ?></span>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-center font-raleway text-white" 
                                id="rs-3-layer-2"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['0']"
                                data-fontsize="['18']"
                                data-lineheight="['34']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1200" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; font-weight:500;"><?php echo $slider_value->body; ?>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" 
                                id="rs-3-layer-3"
                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['80']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1400" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-lg btn-circled mr-10" href="#">Signup Now</a> <a class="btn btn-colored btn-lg btn-circled btn-theme-colored" href="<?php echo base_url('site/silder_details/'.$slider_value->id); ?>">View Details</a>
                            </div>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
                <!-- end .rev_slider -->
            </div>
            <!-- end .rev_slider_wrapper -->
        </div>
    </section>
    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <div class="meet-doctors">
                            <h6 class="text-uppercase letter-space-5 mt-0">Gravida vitae Dapibus</h6>
                            <h2 class="text-uppercase mt-20"><span class="text-theme-colored"><?php echo $about_us->title; ?></span></h2>
                            <?php echo $about_us->body; ?>
                        </div>
                        <div class="row mt-30">
                            <?php foreach ($packages as $key => $package_value) {?>
                            <div class="col-md-3">
                                <div class="thumb text-center">
                                    <img class="img-circle border-7px" src="<?php echo base_url($package_value->photo); ?>" alt="">
                                    <h4 class="icon-box-title mt-20 mb-20 text-uppercase letter-sapce-3 font-weight-400"><a href="<?php echo base_url('site/services_details/'.$package_value->id); ?>"><?php echo $package_value->title; ?></a></h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="border-6px p-30 pt-10 pb-0">
                            <h5><i class="fa fa-pencil-square-o text-theme-colored"></i> Need Help?</h5>
                            <p class="mt-0 text-uppercase">Just make an appointment to get help from our experts</p>
                            <!-- Appontment Form Starts -->
                            <form id="appointment_form_at_home" name="appointment_form_at_home" class="" method="post" action="<?php echo base_url('site/manage_query/add') ?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input  name="name" class="form-control required" type="text" required="" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input name="phone" class="form-control required" type="text" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-10">
                                    <textarea name="address" class="form-control required"  placeholder="Enter Address" rows="3"></textarea>
                                </div>
                                <div class="form-group mb-10">
                                    <textarea name="message_body" class="form-control required"  placeholder="Enter Message" rows="5"></textarea>
                                </div>
                                <div class="form-group mb-0 mt-20">
                                    <button type="submit" class="btn btn-dark btn-theme-colored">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Our Services -->
    <section id="services" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/pattern/p8.png">
        <div class="container pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title text-uppercase"><?php echo $service_title_one; ?> <span class="text-black font-weight-300"><?php echo $service_title_two; ?></span></h2>
                        <p class="text-uppercase letter-space-4"></p>
                    </div>
                </div>
            </div>
            <div class="row mtli-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-dots="true">
                        <?php foreach ($packages as $key => $package_value) { ?>
                        <div class="item">
                            <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                                <div class="thumb mb-20"> <img alt="featured project" src="<?php echo base_url($package_value->photo); ?>" class="img-responsive img-fullwidth"> 
                                </div>
                                <div class="content text-left flip p-25 pt-0">
                                    <h4 class="text-uppercase font-weight-800 line-bottom"><?php echo $package_value->title; ?></h4>
                                    <p><?php echo character_limiter(strip_tags($package_value->body),80); ?></p>
                                    <a href="<?php echo base_url('site/services_details/'.$package_value->id); ?>" class="btn-read-more btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider:  -->
    <section class="divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/physiotherapy/bg/bg2.jpg" data-parallax-ratio="0.7">
        <div class="container pt-170 pb-170 pt-sm-100 pb-sm-100">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    </div>
                </div>
            </div>
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider: offers -->
    <section id="offers" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/pattern/p8.png">
        <div class="container pb-0">
            <div class="bg-lighter bg-img-right-top sm-no-bg mt-sm-0" data-margin-top="-350px" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/2.png">
                <div class="row">
                    <div class="col-md-6 col-md-offset-1 p-sm-40 pt-sm-0 pt-50 pb-20">
                        <h2 class="title text-uppercase text-theme-colored"><span class="text-black font-weight-300"><?php echo $healthzone_features_title; ?></span></h2>
                        <?php echo $healthzone_features_body; ?>
                        <div class="icon-box text-left flip sm-text-center p-0 mt-50 mb-45">
                            <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored ">
                            <img src="<?php echo base_url($ankle_sprains_and_treatment->attatched); ?>" alt="" style="width: 100px; height: 100px;">
                            </a>
                            <div>
                                <h5 class="icon-box-title mt-15 mb-10"><strong><?php echo $ankle_sprains_and_treatment->title; ?></strong></h5>
                                <?php echo $ankle_sprains_and_treatment->body; ?>
                            </div>
                        </div>
                        <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                            <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored ">
                            <img  src="<?php echo base_url($knee_pain_exercises->attatched); ?>" alt="" style="width: 100px; height: 100px;">
                            </a>
                            <div>
                                <h5 class="icon-box-title mt-15 mb-10"><strong><?php echo $knee_pain_exercises->title; ?></strong></h5>
                                <?php echo $knee_pain_exercises->body; ?>
                            </div>
                        </div>
                        <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                            <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored">
                            <img  src="<?php echo base_url($back_pain_exercises->attatched); ?>" alt="" style="width: 100px; height: 100px;">
                            </a>
                            <div>
                                <h5 class="icon-box-title mt-15 mb-10"><strong><?php echo $back_pain_exercises->title; ?></strong></h5>
                                <?php echo $back_pain_exercises->body; ?>
                            </div>
                        </div>
                        <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                            <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored">
                            <img  src="<?php echo base_url($foot_pain_exercises->attatched); ?>" alt="" style="width: 100px; height: 100px;">
                            </a>
                            <div>
                                <h5 class="icon-box-title mt-15 mb-10"><strong><?php echo $foot_pain_exercises->title; ?></strong></h5>
                                <?php echo $foot_pain_exercises->body; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Physiotherapist -->
    <section id="dentist">
        <div class="container pb-0 pt-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase title"><?php echo $team_title_one; ?> <span class="text-black font-weight-300"><?php echo $team_title_two; ?></span></h2>
                        <p class="text-uppercase letter-space-4"></p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row ml-md-0 multi-row-clearfix">
                    <?php foreach ($teams as $key => $team_value) {?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15 pb-15">
                        <div class="trainer-item">
                            <div class="trainer-thumb"> <img src="<?php echo base_url($team_value->photo); ?>" alt="" class="img-fullwidth img-responsive"> </div>
                            <div class="trainer-info">
                                <div class="social-network">
                                    <ul class="list-inline">
                                        <li><a href="<?php echo 'http://'.$team_value->facebook; ?>"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                        <li><a href="<?php echo 'http://'.$team_value->twitter; ?>"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                    </ul>
                                </div>
                                <div class="trainer-biography">
                                    <h3 class="text-white"><?php echo $team_value->name; ?></h3>
                                    <h5 class="text-white"><?php echo $team_value->designation; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Divider  -->
    <section class="divider layer-overlay overlay-black" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/physiotherapy/bg/bg2.jpg" >
        <div class="container pb-150 pb-sm-0">
            <div class="section-title text-center pb-140 pb-sm-0 pt-0">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title text-uppercase text-white">Pricing <span class="text-theme-colored">List</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Pricing Table -->
    <section id="pricing">
        <div class="container pt-sm-0">
            <div class="section-title">
                <div class="row"> </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                        <div class="pricing-table text-center pt-30 pb-0 mt-sm-0 maxwidth400 bg-lighter" data-margin-top="-380px">
                            <h3 class="package-type mb-30 text-uppercase">First Time <span class="font-weight-300 clearfix">Consulting</span></h3>
                            <div class="price pt-5 pb-5 bg-black-222">
                                <div class="price-period">
                                    <h4 class="text-white"><em>Only</em></h4>
                                </div>
                            </div>
                            <div class="price-amount bg-theme-colored rotate">
                                <div class="no-rotate text-white">120<sup>$</sup></div>
                            </div>
                            <ul class="list table-list text-left flip check-circle pt-40 pb-40 pr-20 bg-lighter">
                                <li>Free Consultation</li>
                                <li>Physiotherapy</li>
                                <li>24 Hour Services</li>
                                <li>Home Services</li>
                            </ul>
                            <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                        <div class="pricing-table text-center pt-30 pb-0 mt-sm-0 maxwidth400 bg-lighter" data-margin-top="-380px">
                            <h3 class="package-type mb-30 text-uppercase">Second Time <span class="font-weight-300 clearfix">Consulting</span></h3>
                            <div class="price pt-5 pb-5 bg-theme-colored">
                                <div class="price-period">
                                    <h4 class="text-white"><em>Only</em></h4>
                                </div>
                            </div>
                            <div class="price-amount bg-theme-colored rotate">
                                <div class="no-rotate text-white">80<sup>$</sup></div>
                            </div>
                            <ul class="list table-list text-left flip check-circle pt-40 pb-40 pr-20 bg-lighter">
                                <li>Free Consultation</li>
                                <li>Physiotherapy</li>
                                <li>24 Hour Services</li>
                                <li>Home Services</li>
                            </ul>
                            <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                        <div class="pricing-table text-center pt-30 pb-0 mt-sm-0 maxwidth400 bg-lighter" data-margin-top="-380px">
                            <h3 class="package-type mb-30 text-uppercase">Regular <span class="font-weight-300 clearfix">Consulting</span></h3>
                            <div class="price pt-5 pb-5 bg-black-222">
                                <div class="price-period">
                                    <h4 class="text-white"><em>Only</em></h4>
                                </div>
                            </div>
                            <div class="price-amount bg-theme-colored rotate">
                                <div class="no-rotate text-white">60<sup>$</sup></div>
                            </div>
                            <ul class="list table-list text-left flip check-circle pt-40 pb-40 pr-20 bg-lighter">
                                <li>Free Consultation</li>
                                <li>Physiotherapy</li>
                                <li>24 Hour Services</li>
                                <li>Home Services</li>
                            </ul>
                            <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Gallery -->
    <section id="gallery" class="bg-lighter">
        <div class="container-fluid pb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title text-uppercase"><?php echo $healthzone_gallery_title_one; ?> <span class="text-black font-weight-300"><?php echo $healthzone_gallery_title_two; ?></span></h2>
                        <p class="text-uppercase letter-space-4"></p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Works Filter -->
                        <div class="portfolio-filter">
                            <a href="#" class="active" data-filter="*">All</a>
                            <a href="#branding" class="" data-filter=".branding">Branding</a>
                            <a href="#design" class="" data-filter=".design">Design</a>
                            <a href="#photography" class="" data-filter=".photography">Photography</a>
                        </div>
                        <!-- End Works Filter -->
                        <!-- Portfolio Gallery Grid -->
                        <div id="grid" class="gallery-isotope grid-4 clearfix">
                            <?php foreach ($portfolio as $key => $portfolio_value) { ?>
                            <div class="gallery-item <?php echo $portfolio_value->category; ?>">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="<?php echo base_url($portfolio_value->photo); ?>" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder text-center">
                                        <h5 class="title"><?php echo $portfolio_value->title; ?></h5>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a data-lightbox="image" href="<?php echo base_url($portfolio_value->photo); ?>"><i class="fa fa-plus"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url($portfolio_value->photo); ?>">View more</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- End Portfolio Gallery Grid -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Blog -->
    <section id="blog" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/pattern/p8.png">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="title text-uppercase">site & <span class="text-black font-weight-300">blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($blogs as $key => $blog_value) {?>
                <div class="col-md-4">
                    <article class="post clearfix">
                        <div class="entry-header">
                            <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="<?php echo base_url($blog_value->photo); ?>"> </div>
                            <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <ul class="font-12">
                                            <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                30 Likes</a>
                                            </li>
                                            <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                72 Comments</a>
                                            </li>
                                            <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-content p-20">
                            <h4 class="entry-title text-white text-uppercase"><a href="<?php echo base_url('site/blog_details/'.$blog_value->id); ?>"><?php echo $blog_value->title; ?></a></h4>
                            <ul class="entry-date list-inline mt-10 mb-10">
                                <li><a href="#" class="text-theme-colored"><?php echo date('M d, Y',strtotime($blog_value->date)); ?></a></li>
                            </ul>
                            <?php echo character_limiter(strip_tags($blog_value->body),100); ?>
                            <br>
                            <a href="<?php echo base_url('site/blog_details/'.$blog_value->id); ?>" class="btn-read-more btn-sm">Read More</a>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
<!--Slider Revolution script-->
<script>
    $(document).ready(function(e) {
      var revapi = $(".rev_slider").revolution({
        sliderType:"standard",
        jsFileLocation: "js/revolution-slider/js/",
        sliderLayout: "fullScreen",
        dottedOverlay: "none",
        delay: 5000,
        navigation: {
          keyboardNavigation: "off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          onHoverStop: "off",
          touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
          },
          arrows: {
            style: "gyges",
            enable: true,
            hide_onmobile: false,
            hide_onleave: true,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            tmp: '',
            left: {
              h_align: "left",
              v_align: "center",
              h_offset: 0,
              v_offset: 0
            },
            right: {
              h_align: "right",
              v_align: "center",
              h_offset: 0,
              v_offset: 0
            }
          },
          bullets: {
            enable: true,
            hide_onmobile: true,
            hide_under: 800,
            style: "hebe",
            hide_onleave: false,
            direction: "horizontal",
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 30,
            space: 5,
            tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
          }
        },
        responsiveLevels: [1240, 1024, 778],
        visibilityLevels: [1240, 1024, 778],
        gridwidth: [1170, 1024, 778, 480],
        gridheight: [720, 768, 960, 720],
        lazyType: "none",
        parallax:"mouse",
        parallaxBgFreeze:"off",
        parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
        shadow: 0,
        spinner: "off",
        stopLoop: "on",
        stopAfterLoops: 0,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "0",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
          simplifyAll: "off",
          nextSlideOnWindowFocus: "off",
          disableFocusListener: false,
        }
      });
    });
</script>
<!--End Slider Revolution script-->

