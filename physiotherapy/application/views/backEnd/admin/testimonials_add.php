<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('testimonials_add'); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url() ?>admin/testimonials/list" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('testimonials_list'); ?> </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="<?php echo base_url("admin/testimonials/add");?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <br><br>
                            <div class="col-md-9">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('name'); ?></label>
                                            <input name="name" placeholder="<?php echo $this->lang->line('name'); ?>" class="form-control inner_shadow_red" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('position') ?></label>
                                            <input name="position" placeholder="<?php echo $this->lang->line('position'); ?>" class="form-control inner_shadow_red" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('priority'); ?></label>
                                            <input name="priority" placeholder="<?php echo $this->lang->line('priority'); ?>" class="form-control inner_shadow_red" required="" type="number" min='1'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('description'); ?></label>
                                            <textarea name="description" id="" cols="" rows="" class="form-control inner_shadow_red"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- Profile Image -->
                                <div class="box box-danger">
                                    <div class="box-header"> <label> <?php echo $this->lang->line('testimonials_photo') ?> </label> </div>
                                    <div class="box-body box-profile">
                                        <center>
                                            <img id="testimonials_photo_change" class="img-responsive  inner_shadow_red" src="//placehold.it/400x400" alt="Testimonials Picture" style="max-width: 120px;">
                                            <br>
                                            <input type="file" name="photo" onchange="readpicture(this)">
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-danger"><?php echo $this->lang->line('reset') ?></button>
                                    <button type="submit" class="btn bg-green"><?php echo $this->lang->line('save') ?></button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>

<script>
    function readpicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#testimonials_photo_change')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    };
</script>