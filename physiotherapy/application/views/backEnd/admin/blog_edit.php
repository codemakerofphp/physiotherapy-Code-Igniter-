

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('update_blog'); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url() ?>admin/blog/list" class="btn bg-orange btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('blog_list'); ?>  </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="<?php echo base_url("admin/blog/edit/".$edit_info->id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <br><br>
                            <div class="col-md-12">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('title'); ?> </label>
                                            <input name="title" placeholder="<?php echo $this->lang->line('title'); ?> " class="form-control" required="" type="text" value="<?php echo $edit_info->title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('date'); ?> </label>
                                            <input name="date" placeholder="<?php echo $this->lang->line('date'); ?>" class="form-control" required="" type="text" id="date" value="<?php echo $edit_info->date; ?>">
                                        </div>
                                    </div>
                                    <!-- Profile Image -->
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <center>
                                                <label> <?php echo $this->lang->line('blog_photo'); ?> </label> 
                                                <img id="blog_picture_change" class="img-responsive" src="<?php echo base_url($edit_info->photo); ?>" alt="profile picture" style="max-width: 120px;">
                                                <br>
                                                <input type="file" name="photo" onchange="readpicture(this);">
                                            </center>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="" class="col-sm-12"><?php echo $this->lang->line('body'); ?> </label>
                                        <div class="col-sm-12">
                                            <textarea name="body" id="blog_editor" cols="" rows="10"><?php echo $edit_info->body; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line('reset'); ?></button>
                                    <button type="submit" class="btn btn-sm bg-purple"><?php echo $this->lang->line('save'); ?></button>
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
            $('#blog_picture_change')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }
    
</script>
<script>
    $(function () {
        CKEDITOR.replace('blog_editor')
        $('.textarea').wysihtml5()
    })
</script>

<script>
    $(function(){
    
     $('#date').datepicker({
            autoclose: true,
            changeYear:true,
            changeMonth:true,
            dateFormat: "dd-mm-yy",
            yearRange: "-100:+0"
        });
     
    });
</script>

