

<!-- Start main-content -->
<div class="main-content">
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg1.jpg">
    <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title text-white"><?php echo $common_page_data->title; ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: About -->
<section id="about">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-7">
                    <div class="caption"> <span class="text-uppercase letter-space-4 mb-20 text-theme-colored">  </span>
                        <?php echo $common_page_data->body; ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="class-item box-hover-effect effect1">
                        <div class="thumb"> 
                            <iframe src="https://docs.google.com/gview?url=<?php echo base_url().$common_page_data->attatched; ?>&embedded=true&pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="300px" height="200px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

