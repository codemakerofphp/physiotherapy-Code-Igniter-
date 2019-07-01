

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg1.jpg">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: tranning Class -->
    <section id="classes" data-bg-img="images/pattern/p8.png">
        <div class="container">
            <div class="row mtli-row-clearfix">
                <?php foreach ($packages as $key => $package_value) { ?>
                <div class="col-md-4 text-justify">
                    <div class="bg-white class-item box-hover-effect mb-20 effect1 mb-md-30">
                        <div class="thumb mb-20"> <img alt="featured project" src="<?php echo base_url($package_value->photo); ?>" class="img-responsive img-fullwidth"> </div>
                        <div class="content text-left p-25 pt-0 flip">
                            <h4 class="text-uppercase text-theme-colored font-weight-800"><?php echo $package_value->title; ?></h4>
                            <div class="line-bottom  mt-10 mb-10"></div>
                            <?php echo character_limiter(strip_tags($package_value->body),80); ?>
                            <br>
                            <a href="<?php echo base_url('site/services_details/'.$package_value->id); ?>" class="btn-read-more btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

