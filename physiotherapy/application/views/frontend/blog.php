

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg1.jpg">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    <?php foreach ($blogs as $key => $blog_value) { ?>
                    <div class="col-md-4">
                        <article class="post clearfix mb-30">
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
        </div>
    </section>
</div>
<!-- end main-content -->

