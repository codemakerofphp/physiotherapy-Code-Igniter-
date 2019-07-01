

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('contact_manage_list'); ?> </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="userListTable" class="table table-bordered table-striped table_th_danger">
                        <thead>
                            <tr>
                                <th width="5%"><?php echo $this->lang->line('sl'); ?></th>
                                <th width="15%"><?php echo $this->lang->line('name'); ?></th>
                                <th width="10%"><?php echo $this->lang->line('email'); ?></th>
                                <th width="10%"><?php echo $this->lang->line('phone'); ?></th>
                                <th width="20%"><?php echo $this->lang->line('address'); ?></th>
                                <th width="30%"><?php echo $this->lang->line('message'); ?></th>
                                <th width="10%"><?php echo $this->lang->line('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($all_contact_manage as $key => $value) {
                                    ?>
                            <tr>
                                <td> <?php echo ++$key ; ?> </td>
                                <td> <?php echo $value->name; ?> </td>
                                <td> <?php echo $value->email; ?> </td>
                                <td> <?php echo $value->phone; ?> </td>
                                <td> <?php echo $value->address; ?> </td>
                                <td> <?php echo character_limiter(strip_tags($value->message_body),100); ?> </td>
                                <td> 
                                    <a href="<?php echo base_url('admin/contactmanage/edit/'.$value->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/contactmanage/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i></a>
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

