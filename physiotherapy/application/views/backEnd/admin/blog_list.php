

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Blog List</h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url('admin/blog/add') ?>" class="btn bg-orange btn-sm"><i class="fa fa-plus"></i>Add Blog</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="userListTable" class="table table-bordered table-striped table_th_primary">
                        <thead>
                            <tr>
                                <th style="width: 5%;"><?php echo $this->lang->line('sl'); ?></th>
                                <th style="width: 15%;"><?php echo $this->lang->line('date'); ?></th>
                                <th style="width: 20%;"><?php echo $this->lang->line('title'); ?></th>
                                <th style="width: 40%;"><?php echo $this->lang->line('body'); ?></th>
                                <th style="width: 10%;"><?php echo $this->lang->line('image'); ?></th>
                                <th style="width: 10%;"><?php echo $this->lang->line('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($blogs as $key => $value) {
                                	?>
                            <tr>
                                <td> <?php echo ++$key ; ?> </td>
                                <td> <?php echo date('d-M-Y',strtotime($value->date)); ?> </td>
                                <td> <?php echo $value->title; ?> </td>
                                <td> <?php echo character_limiter(strip_tags($value->body),100); ?> </td>
                                <td>
                                    <img src="<?php echo base_url($value->photo) ?>" alt="" width="50px" height="50px">
                                </td>
                                <td> 
                                    <a href="<?php echo base_url('admin/blog/edit/'.$value->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/blog/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick = 'return confirm("Are You Sure?")'><i class="fa fa-trash"></i></a>
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

