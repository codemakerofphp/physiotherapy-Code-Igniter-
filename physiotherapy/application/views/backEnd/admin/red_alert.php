<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('red_alert'); ?> </h3>
                    <div class="box-tools pull-right">
                       
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="<?php echo base_url('admin/red_alert/add'); ?>" method="post" enctype="multipart/form-data" class="">
                
                            <div class="col-sm-12 form-group">
                                <label for="message"><?php echo $this->lang->line("message"); ?></label>
                                <textarea rows="1" name="message" class="form-control inner_shadow_red" id="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-sm-1 form-group">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="start_date"><?php echo $this->lang->line("start_date"); ?></label>
                                <input type="text" placeholder="<?php echo $this->lang->line("start_date"); ?>" name="start_date" class="date form-control inner_shadow_red" id="start_date" required>
                            </div>
                            <div class="bootstrap-timepicker col-sm-2 form-group">
                                <label for="start_time"><?php echo $this->lang->line("start_time"); ?></label>
                                <input type="text" name="start_time" class="timepicker form-control inner_shadow_red" id="start_time" required>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="end_date"><?php echo $this->lang->line("end_date"); ?></label>
                                <input type="text" placeholder="<?php echo $this->lang->line("end_date"); ?>" name="end_date" class="date form-control inner_shadow_red" id="end_date" required>
                            </div>
                            <div class="bootstrap-timepicker col-sm-2 form-group">
                                <label for="end_time"><?php echo $this->lang->line("end_time"); ?></label>
                                <input type="text" name="end_time" class="timepicker form-control inner_shadow_red" id="end_time" required>
                            </div>

                            <div class="col-sm-2 form-group">
                                <label for="color"><?php echo $this->lang->line("color"); ?></label>
                                <input type="color" name="color" class="form-control inner_shadow_red" id="color" required>
                            </div>
                            <div class="col-sm-1 form-group">
                            </div>
                            <div class="col-sm-12 form-group">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red"> <i class="fa fa-times">  </i> <?php echo $this->lang->line('cancel'); ?></button> 
                                    <button type="submit" class="btn btn-sm bg-green"> <i class="fa fa-save">  </i> <?php echo $this->lang->line('save'); ?></button>
                                </center>
                            </div>

                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table no-margin table_th_maroon table-strip">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;"><?= $this->lang->line('sl'); ?></th>
                                            <th style="width: 50%;"><?= $this->lang->line('message'); ?></th>
                                            <th style="width: 15%;"><?= $this->lang->line('start_date'); ?></th>
                                            <th style="width: 15%;"><?= $this->lang->line('end_date'); ?></th>
                                            <th style="width: 7%;"><?= $this->lang->line('color'); ?></th>
                                            <th style="width: 8%;"><?= $this->lang->line('action'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php
                                        $sl = 0;
                                        foreach ($alert_info as $value) {
                                            ?>
                                            <tr> 
                                                <td><?php echo ++$sl; ?></td>

                                                <td><?php echo character_limiter(strip_tags($value->message),80); ?></td>

                                                <td><?php echo date('d M Y, h:i a', strtotime($value->start_datetime)); ?></td>

                                                <td><?php echo date('d M Y, h:i a', strtotime($value->end_datetime)); ?></td>

                                                <td><input disabled type="color" value="<?php echo $value->color; ?>"></td>

                                                <td>
                                                    <a onclick="return confirm('Are you sure to delete?'); " href="<?php echo base_url('admin/red_alert/delete/'.$value->id); ?>" class="btn btn-sm btn-danger"> <?= $this->lang->line('delete'); ?> </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>

<script>
    //Timepicker

    $(function () {
        $('.timepicker').timepicker({
            showInputs: false
        });
        $('.date').datepicker();
    });
</script>