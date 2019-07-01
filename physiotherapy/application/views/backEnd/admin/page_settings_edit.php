<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line("page_settings"); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url("admin/page_settings"); ?>" class="btn btn-sm bg-red" style="color: white; "><i class="fa fa-list"></i> <?php echo $this->lang->line('page_settings_list') ?> </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <form action="<?php echo base_url("admin/page_settings/edit/" . $table_info->id); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="form-group">
                            <label for="title_one" class="col-sm-2 control-label"><?php echo $this->lang->line("title"); ?></label>
                            <div class="col-sm-8">
                                <input value="<?php echo $table_info->title; ?>" id="title" type="text" name="title" class="form-control" placeholder="<?php echo $this->lang->line("title"); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body" class="col-sm-2 control-label"><?php echo $this->lang->line("body"); ?></label>
                            <div class="col-sm-8">
                                <textarea id="body" name="body" class="form-control"><?php echo $table_info->body; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="old_photo" class="col-sm-2 control-label"><?php echo $this->lang->line("old_file"); ?></label>
                            <div class="col-sm-8">
                                <?php
                                $file_parts = pathinfo($table_info->attatched);
                                if(file_exists($table_info->attatched)) {
                                    if ($file_parts['extension'] != "pdf") {
                                        ?>
                                        <img style="height:80px; width:80px;" src="<?php echo base_url($table_info->attatched); ?>" id="old_photo">
                                        <?php
                                    } else {
                                        ?>
                                        <object style="height:500px;" data="<?php echo base_url($table_info->attatched); ?>" type="application/pdf" width="100%">
                                        </object>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo" class="col-sm-2 control-label"><?php echo $this->lang->line("file_attatched"); ?></label>
                            <div class="col-sm-8">
                                <input id="photo" type="file" name="photo" onchange="readpicture(this)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line("cancel"); ?></button>
                                <button type="submit" class="btn btn-sm bg-green "><?php echo $this->lang->line("save"); ?></button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    CKEDITOR.replace('body');
</script>

<script>
    // profile picture change
    function readpicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#old_photo')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }
    
</script>