<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line("slider_list"); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url('admin/slider/add') ?>" class="btn bg-red btn-sm"><i class="fa fa-plus"></i> <?php echo $this->lang->line("slider_add"); ?> </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="userListTable" class="table table-bordered table-striped table_th_success">
                        <thead>
                            <tr style="width: 100%">
                                <th style="width: 5%"><?php echo $this->lang->line('sl'); ?></th>
                                <th style="width: 20%"><?php echo $this->lang->line('title_one'); ?></th>
                                <th style="width: 20%"><?php echo $this->lang->line('title_two'); ?></th>
                                <th style="width: 30%"><?php echo $this->lang->line('body'); ?></th>
                                <th style="width: 5%"><?php echo $this->lang->line('priority'); ?></th>
                                <th style="width: 10%"><?php echo $this->lang->line('photo'); ?></th>
                                <th style="width: 10%"><?php echo $this->lang->line('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($sliders as $key => $slider_value) {
                            ?>
                            <tr>
                                <td> <?php echo ++$key; ?> </td>
                                <td> <?php echo $slider_value->title_one; ?> </td>
                                <td> <?php echo $slider_value->title_two; ?> </td>
                                <td> <?php echo character_limiter(strip_tags($slider_value->body),100); ?> </td>
                                <td> <?php echo $slider_value->priority; ?> </td>
                                <td> 
                                    <img src="<?php echo base_url($slider_value->photo); ?>" alt="" style="width: 50px; height: 50px;">
                                </td>
                                <td>
                                    <a href="<?php echo base_url('admin/slider/edit/'.$slider_value->id); ?>" class="btn btn-sm bg-green"><i class="fa fa-pencil"></i></a>
                                    <a href="<?php echo base_url('admin/slider/delete/'.$slider_value->id); ?>" class="btn btn-sm bg-red" onclick="return confirm('Are You Sure?');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
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