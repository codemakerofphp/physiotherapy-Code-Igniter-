

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('manage_teammember'); ?> </h3>
                    <div class="box-tools pull-right">
                    </div>
                </div>
                <div class="box-body">
                    <?php if (isset($edit_info)) {?>
                        <div class="row">
                            <form action="<?php echo base_url("admin/teammember/edit/".$edit_info->id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <br><br>
                                <div class="col-md-9">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label> <?php echo $this->lang->line('name'); ?> </label>
                                                <input name="name" placeholder="<?php echo $this->lang->line('name'); ?> " class="form-control" required="" type="text" value="<?php echo $edit_info->name; ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label><?php echo $this->lang->line('designation'); ?> </label>
                                                <input name="designation" placeholder="<?php echo $this->lang->line('designation'); ?> " class="form-control" required="" type="text" value="<?php echo $edit_info->designation; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label> <?php echo $this->lang->line('facebook'); ?> </label>
                                                <input name="facebook" placeholder="<?php echo $this->lang->line('facebook'); ?>" class="form-control" required="" type="text" value="<?php echo $edit_info->facebook; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label> <?php echo $this->lang->line('twitter'); ?> </label>
                                                <input name="twitter" placeholder="<?php echo $this->lang->line('twitter'); ?>" class="form-control" required="" type="text" value="<?php echo $edit_info->twitter; ?>">
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-md-3">
                                    <!-- Profile Image -->
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <center>
                                                <label> <?php echo $this->lang->line('teammember_photo'); ?> </label> 
                                                <img id="teammember_picture_change" class="img-responsive" src="<?php echo base_url($edit_info->photo); ?>" alt="Team Member Picture" style="max-width: 120px;">
                                                <br>
                                                <input type="file" name="photo" onchange="readpicture(this);" required="">
                                            </center>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line('cancel'); ?></button>
                                        <button type="submit" class="btn btn-sm bg-green"><?php echo $this->lang->line('update'); ?></button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    <?php } else{ ?>
                        <div class="row">
                            <form action="<?php echo base_url("admin/teammember/add");?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <br><br>
                                <div class="col-md-9">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label> <?php echo $this->lang->line('name'); ?> </label>
                                                <input name="name" placeholder="<?php echo $this->lang->line('name'); ?> " class="form-control" required="" type="text">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label><?php echo $this->lang->line('designation'); ?> </label>
                                                <input name="designation" placeholder="<?php echo $this->lang->line('designation'); ?> " class="form-control" required="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label> <?php echo $this->lang->line('facebook'); ?> </label>
                                                <input name="facebook" placeholder="<?php echo $this->lang->line('facebook'); ?>" class="form-control" required="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label> <?php echo $this->lang->line('twitter'); ?> </label>
                                                <input name="twitter" placeholder="<?php echo $this->lang->line('twitter'); ?>" class="form-control" required="" type="text">
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-md-3">
                                    <!-- Profile Image -->
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <center>
                                                <label> <?php echo $this->lang->line('teammember_photo'); ?> </label> 
                                                <img id="teammember_picture_change" class="img-responsive" src="//placehold.it/400x400" alt="profile picture" style="max-width: 120px;">
                                                <br>
                                                <input type="file" name="photo" onchange="readpicture(this);" required="">
                                            </center>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line('reset'); ?></button>
                                        <button type="submit" class="btn btn-sm bg-green"><?php echo $this->lang->line('save'); ?></button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                    <br>
                    <div class="row">
                        <div class="col-xs-12">
                            <table id="userListTable" class="table table-bordered table-striped table_th_success">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('sl'); ?></th>
                                        <th><?php echo $this->lang->line('name'); ?></th>
                                        <th><?php echo $this->lang->line('designation'); ?></th>
                                        <th><?php echo $this->lang->line('facebook'); ?></th>
                                        <th><?php echo $this->lang->line('twitter'); ?></th>
                                        <th><?php echo $this->lang->line('image'); ?></th>
                                        <th><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($teammembers as $key => $value) {
                                            ?>
                                    <tr>
                                        <td> <?php echo ++$key ; ?> </td>
                                        <td> <?php echo $value->name; ?> </td>
                                        <td> <?php echo $value->designation; ?> </td>
                                        <td> <?php echo $value->facebook; ?> </td>
                                        <td> <?php echo $value->twitter; ?> </td>
                                        <td>
                                            <img src="<?php echo base_url($value->photo) ?>" alt="" width="50px" height="50px">
                                        </td>
                                        <td> 
                                            <a href="<?php echo base_url('admin/teammember/edit/'.$value->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('admin/teammember/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick = 'return confirm("Are You Sure?")'><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
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
            $('#teammember_picture_change')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }
    
</script>

<script type="text/javascript">
    $(function () {
      $("#userListTable").DataTable();
    });
    
</script>

