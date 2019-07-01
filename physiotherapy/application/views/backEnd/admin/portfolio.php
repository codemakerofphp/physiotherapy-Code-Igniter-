<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('manage_portfolio'); ?> </h3>
                </div>
                <div class="box-body">
                    <?php if (isset($edit_info)) {?>
                    <div class="row">
                        <form action="<?php echo base_url("admin/portfolio/edit/".$edit_info->id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <br><br>
                            <div class="col-md-9">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('title'); ?></label>
                                            <input name="title" placeholder="<?php echo $this->lang->line('title'); ?>" class="form-control" required="" type="text" value="<?php echo $edit_info->title; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('priority'); ?> </label>
                                            <input name="priority" placeholder="<?php echo $this->lang->line('priority'); ?>" class="form-control" required="" type="text" value="<?php echo $edit_info->priority; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('category'); ?> </label>
                                            <select name="category" id="" class="form-control select2">
                                                <option value=""><?php echo $this->lang->line('choose_one') ?></option>
                                                <option value="all" 
                                                    <?php if ($edit_info->category == 'all') {
                                                        echo "selected";
                                                    } ?>
                                                ><?php echo $this->lang->line('all') ?></option>
                                                <option value="branding" 
                                                    <?php if ($edit_info->category == 'branding') {
                                                        echo "selected";
                                                    } ?>
                                                ><?php echo $this->lang->line('branding') ?></option>
                                                <option value="design" 
                                                    <?php if ($edit_info->category == 'design') {
                                                        echo "selected";
                                                    } ?>
                                                ><?php echo $this->lang->line('design') ?></option>
                                                <option value="photography" 
                                                    <?php if ($edit_info->category == 'photography') {
                                                        echo "selected";
                                                    } ?>
                                                ><?php echo $this->lang->line('photography') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- Profile Image -->
                                <div class="box box-danger">
                                    <div class="box-header"> <label> <?php echo $this->lang->line('photo'); ?> </label> </div>
                                    <div class="box-body box-profile">
                                        <center>
                                            <img id="portfolio_photo_change" class="img-responsive" src="<?php echo base_url($edit_info->photo); ?>" alt="Portfolio Picture" style="max-width: 120px;">
                                            <br>
                                            <input type="file" name="photo" onchange="readpicture(this)">
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-danger"><?php echo $this->lang->line('cancel') ?></button>
                                    <button type="submit" class="btn bg-aqua"><?php echo $this->lang->line('update') ?></button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <?php }else{ ?>
                    <div class="row">
                        <form action="<?php echo base_url("admin/portfolio/add");?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <br><br>
                            <div class="col-md-9">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('title'); ?></label>
                                            <input name="title" placeholder="<?php echo $this->lang->line('title'); ?>" class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('priority'); ?> </label>
                                            <input name="priority" placeholder="<?php echo $this->lang->line('priority'); ?>" class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('category'); ?> </label>
                                            <select name="category" id="" class="form-control select2">
                                                <option value=""><?php echo $this->lang->line('choose_one') ?></option>
                                                <option value="all"><?php echo $this->lang->line('all') ?></option>
                                                <option value="branding"><?php echo $this->lang->line('branding') ?></option>
                                                <option value="design"><?php echo $this->lang->line('design') ?></option>
                                                <option value="photography"><?php echo $this->lang->line('photography') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- Profile Image -->
                                <div class="box box-danger">
                                    <div class="box-header"> <label> <?php echo $this->lang->line('photo'); ?> </label> </div>
                                    <div class="box-body box-profile">
                                        <center>
                                            <img id="portfolio_photo_change" class="img-responsive" src="//placehold.it/400x400" alt="profile picture" style="max-width: 120px;">
                                            <br>
                                            <input type="file" name="photo" onchange="readpicture(this)">
                                        </center>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-danger"><?php echo $this->lang->line('reset') ?></button>
                                    <button type="submit" class="btn bg-aqua"><?php echo $this->lang->line('save') ?></button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 30px; ">
                            <table id="userListTable" class="table table-bordered table-striped table_th_maroon" >
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('sl'); ?></th>
                                        <th><?php echo $this->lang->line('title'); ?></th>
                                        <th><?php echo $this->lang->line('priority'); ?></th>
                                        <th><?php echo $this->lang->line('category'); ?></th>
                                        <th><?php echo $this->lang->line('image'); ?></th>
                                        <th><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($portfolio as $key => $value) {
                                    ?>
                                    <tr>
                                        <td> <?php echo ++$key ; ?> </td>
                                        <td> <?php echo $value->title; ?> </td>
                                        <td> <?php echo $value->priority; ?> </td>
                                        <td> <?php echo $value->category; ?> </td>
                                        <td>
                                            <img src="<?php echo base_url($value->photo) ?>" alt="" width="50px" height="50px">
                                        </td>
                                        <td> 
                                            <a href="<?php echo base_url('admin/portfolio/edit/'.$value->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('admin/portfolio/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick = 'return confirm("Are You Sure?")'><i class="fa fa-trash"></i></a>
                                        </td>
                                        
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>

<script type="text/javascript">
  $(function () {
    $("#userListTable").DataTable();
  });

</script>

<script>
    // profile picture change
    function readpicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#portfolio_photo_change')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }
    
</script>