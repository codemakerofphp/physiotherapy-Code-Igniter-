

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg1.jpg">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">About</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="meet-doctors">
                            <h2 class="text-uppercase mt-20"><span class="text-theme-colored"><?php echo $about_us->title; ?></span></h2>
                            <?php echo $about_us->body; ?>
                        </div>
                        <div class="row mt-30">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 ">
                                <iframe src="https://docs.google.com/gview?url=<?php echo base_url().$about_us->attatched; ?>&embedded=true&pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="300px" height="100px"></iframe>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="divider parallax layer-overlay overlay-deep" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg2.jpg" data-parallax-ratio="0.7">
        <div class="container pt-70 pb-70 mt-0">
            <div class="row text-justify">
                <div class="col-md-6">
                    <h4><?php echo $who_we_are->title; ?></h4>
                    <?php echo $who_we_are->body; ?>
                </div>
                <div class="col-md-6">
                    <h4><?php echo $what_we_do->title; ?></h4>
                    <?php echo $what_we_do->body; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Appontment Form Ends -->

