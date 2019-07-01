<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('slider_add'); ?> </h3>
                    <div class="box-tools pull-right">
                       <a href="<?php echo base_url() ?>admin/slider/list" class="btn bg-red btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('slider_list'); ?> </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="<?php echo base_url("admin/slider/add");?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <br>
                            <div class="col-md-9">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('title_one'); ?></label>
                                            <input name="title_one" placeholder="<?php echo $this->lang->line('title_one'); ?>" class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('title_two'); ?></label>
                                            <input name="title_two" placeholder="<?php echo $this->lang->line('title_two'); ?>" class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('priority'); ?></label>
                                            <input name="priority" placeholder="<?php echo $this->lang->line('priority'); ?>" class="form-control" required="" type="number" min="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('body') ?></label>
                                            <textarea name="body" id="body_text" required="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- Profile Image -->
                                <div class="box box-success">
                                    <div class="box-header"> <label> <?php echo $this->lang->line('photo') ?> </label> </div>
                                    <div class="box-body box-profile">
                                        <center>
                                            <img id="slider_photo_change" class="img-responsive" src="//placehold.it/400x400" alt="profile picture" style="max-width: 120px;">
                                            <br>
                                            <input type="file" name="photo" onchange="readpicture(this)">
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line('reset') ?></button>
                                    <button type="submit" class="btn btn-sm bg-green"><?php echo $this->lang->line('save') ?></button>
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
    
    $(function () {
        CKEDITOR.replace('body_text')
        $('.textarea').wysihtml5()
    });

    function readpicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#slider_photo_change')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>