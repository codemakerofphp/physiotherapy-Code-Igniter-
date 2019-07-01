<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('testimonials_list'); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url() ?>admin/testimonials/add" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('testimonials_add'); ?> </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="userListTable" class="table table-bordered table-striped table_th_danger">
                        <thead>
                            <tr>
                                <th width="5%"><?php echo $this->lang->line('sl'); ?></th>
                                <th width="20%"><?php echo $this->lang->line('name'); ?></th>
                                <th width="20%"><?php echo $this->lang->line('position'); ?></th>
                                <th width="10%"><?php echo $this->lang->line('priority'); ?></th>
                                <th width="25%"><?php echo $this->lang->line('description'); ?></th>
                                <th width="10%"><?php echo $this->lang->line('image'); ?></th>
                                <th width="10%"><?php echo $this->lang->line('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($testimonials as $key => $value) {
                                    ?>
                            <tr>
                                <td> <?php echo ++$key ; ?> </td>
                                <td> <?php echo $value->name; ?> </td>
                                <td> <?php echo $value->position; ?> </td>
                                <td> <?php echo $value->priority; ?> </td>
                                <td> <?php echo character_limiter(strip_tags($value->description),100); ?> 
                                </td>
                                <td> 
                                    <img src="<?php echo base_url($value->photo); ?>" alt="package photo" style="width: 50px; height: 50px;"> 
                                </td>
                                <td> 
                                    <a href="<?php echo base_url('admin/testimonials/edit/'.$value->id); ?>" class="btn btn-sm bg-green"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/testimonials/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $("#userListTable").DataTable();
    });
    
</script>