<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('package_add'); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url() ?>admin/packages/list" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('package_list'); ?> </a>
                    </div>
                </div>
                <div class="box-body">
                    <form action="<?php echo base_url('admin/packages/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row">
                            <br>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="title_two" class="control-label col-md-2"> <?php echo $this->lang->line('title'); ?> </label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control inner_shadow_red" type="text" required="" placeholder="<?php echo $this->lang->line('title'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title_two" class="control-label col-md-2"><?php echo $this->lang->line('priority'); ?></label>
                                    <div class="col-sm-10">
                                        <input name="priority" class="form-control inner_shadow_red" type="number" required="" min="1" placeholder="<?php echo $this->lang->line('priority'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="body" class="control-label col-md-2" > <?php echo $this->lang->line('body'); ?> </label>
                                    <div class="col-sm-10">
                                        <textarea name="body" class="form-control" required="" rows="" width="100%" id="package_editor" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- Profile Image -->
                                <div class="box box-danger">
                                    <div class="box-header"> <label> <?php echo $this->lang->line('package_photo'); ?> </label> </div>
                                    <div class="box-body box-profile">
                                        <center>
                                            <img id="package_photo_change" class="img-responsive" src="//placehold.it/350x220" alt="Package Photo" style="max-width: 120px;"><br>
                                            <input type="file" name="photo" onchange='readpicture(this)'>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm btn-danger"><?php echo $this->lang->line('reset'); ?></button>
                                <button type="submit" class="btn btn-sm bg-green"><?php echo $this->lang->line('save'); ?></button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>

<script>
    // profile picture change
    function readpicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#package_photo_change')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    };

    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('package_editor')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  });
    
</script>