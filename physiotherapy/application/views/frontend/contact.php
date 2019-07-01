

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="<?php echo base_url(); ?>front_end_assets/images/bg/bg6.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-5">
                    <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="<?php echo base_url('site/manage_query/add') ?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Address<small>*</small></label>
                                    <input name="address" class="form-control required" type="text" placeholder="Enter Address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message_body" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <h3 class="line-bottom mt-0 mb-50 ml-15">Our Location</h3>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media bg-deep p-30 mb-20">
                                <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo $our_office_location_title; ?></h5>
                                    <p>#<?php echo $our_office_location_value; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media bg-deep p-30 mb-20">
                                <a class="media-left pull-left flip" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo $contact_number_title; ?></h5>
                                    <p><?php echo $contact_number_value; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media bg-deep p-30 mb-20">
                                <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo $email_address_title; ?></h5>
                                    <p><?php echo $email_address_value; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media bg-deep p-30 mb-20">
                                <a class="media-left pull-left flip" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo $make_video_call_title; ?></h5>
                                    <p><?php echo $make_video_call_value; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <!-- Google Map HTML Codes -->
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.626827168721!2d90.36129811441597!3d23.760683284584257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5885656b07%3A0x2871fff74d617a66!2sHRsoft+BD!5e0!3m2!1sen!2sbd!4v1550489826814" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

