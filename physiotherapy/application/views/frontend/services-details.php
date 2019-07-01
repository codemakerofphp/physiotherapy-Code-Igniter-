

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg1.jpg">
        <div class="container pt-120 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Single Post</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 blog-pull-right">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img src="<?php echo base_url($detail_service->photo); ?>" alt="" class="img-responsive img-fullwidth"> </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-title pt-0">
                                    <h4><?php echo $detail_service->title;?></h4>
                                </div>
                                <div class="entry-meta mb-20">
                                    <ul class="list-inline">
                                        <li>Posted: <span class="text-theme-colored"> <?php echo date('M d, Y',strtotime($detail_service->insert_time)); ?></span></li>
                                        <li>By: <span class="text-theme-colored">Admin</span></li>
                                        <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                                    </ul>
                                </div>
                                <?php echo $detail_service->body; ?>
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tags">
                                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> Law, Juggement, lawyer, Cases</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="author-details media-post">
                            <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="<?php echo base_url(); ?>front_end_assets/images/gym/site/author.jpg"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="styled-icons square-sm m-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="comments-area">
                            <h5 class="comments-title">Comments</h5>
                            <ul class="comment-list">
                                <li>
                                    <div class="media comment-author">
                                        <a class="media-left" href="#"><img class="img-thumbnail" src="<?php echo base_url(); ?>front_end_assets/images/gym/site/comment1.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media comment-author">
                                        <a class="media-left" href="#"><img class="img-thumbnail" src="<?php echo base_url(); ?>front_end_assets/images/gym/site/comment2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                            <div class="clearfix"></div>
                                            <div class="media comment-author nested-comment">
                                                <a href="#" class="media-left pt-20"><img alt="" src="<?php echo base_url(); ?>front_end_assets/images/gym/site/comment3.jpg" class="img-thumbnail"></a>
                                                <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                    <div class="comment-date">23/06/2014</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    <a class="replay-icon pull-right text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                                </div>
                                            </div>
                                            <div class="media comment-author nested-comment">
                                                <a href="#" class="media-left pt-20"><img alt="" src="<?php echo base_url(); ?>front_end_assets/images/gym/site/comment1.jpg" class="img-thumbnail"></a>
                                                <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                    <div class="comment-date">23/06/2014</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    <a class="replay-icon pull-right text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media comment-author">
                                        <a class="media-left" href="#"><img class="img-thumbnail" src="<?php echo base_url(); ?>front_end_assets/images/gym/site/comment2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> 
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Leave a Comment</h5>
                                    <div class="row">
                                        <form role="form" id="comment-form">
                                            <div class="col-sm-6 pt-0 pb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required name="contact_name" id="" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Website" required class="form-control" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Enter Message" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Packages</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <?php foreach ($packages as $key => $package_value) { ?>
                                        <li><a href="<?php echo base_url('site/services_details/'.$package_value->id); ?>"><?php echo $package_value->title; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Latest Blog</h5>
                            <div class="latest-posts">
                                <?php foreach ($blogs as $key => $blog_value) { ?>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a class="post-thumb" href="<?php echo base_url('site/blog_details/'.$blog_value->id); ?>"><img src="<?php echo base_url($blog_value->photo); ?>" alt="" style="width: 75px; height: 75px;"></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0"><a href="<?php echo base_url('site/blog_details/'.$blog_value->id); ?>"><?php echo $blog_value->title; ?></a></h5>
                                            <?php echo character_limiter(strip_tags($blog_value->body),50); ?>
                                        </div>
                                    </article>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Facebook Page</h5>
                            <div id="flickr-feed" class="clearfix">
                                <!-- Flickr Link -->
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhrsoftbd&tabs&width=340&height=70&small_header=true&adapt_container_width=false&hide_cover=true&show_facepile=false&appId" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

