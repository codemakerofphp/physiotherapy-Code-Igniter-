<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('contact_page'); ?> </h3>
                </div>
                <div class="box-body">
                    <?php if(isset($edit_info)){ ?>
                    <div class="row" style="box-shadow: 1px 1px 15px 5px #3c8dbc;margin: 10px 30px 40px 25px;padding: 30px 0px 30px 0px;">
                        <form action="<?= base_url('admin/contactpage/edit/'.$edit_info->id); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="col-md-12">  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('branch_name'); ?></label>
                                            <input name="branch_name" placeholder="<?php echo $this->lang->line('branch_name'); ?>" class="form-control inner_shadow_primary" required="" type="text" value="<?php echo $edit_info->branch_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('email'); ?></label>
                                            <input name="email" placeholder="<?php echo $this->lang->line('email'); ?>" class="form-control inner_shadow_primary" required="" type="email"  value="<?php echo $edit_info->email; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('phone'); ?></label>
                                            <input name="phone" placeholder="<?php echo $this->lang->line('phone'); ?>" class="form-control inner_shadow_primary" type="tel" pattern="[0]{1}[1]{1}[5|6|7|8|9]{1}[0-9]{8}"  value="<?php echo $edit_info->phone; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('address'); ?></label>
                                            <textarea name="address" class="form-control inner_shadow_primary" rows="1" width="100%" ><?php echo $edit_info->address; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line('cancel') ?></button>
                                    <button type="submit" class="btn btn-sm bg-primary"><?php echo $this->lang->line('update') ?></button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <?php } else {?>
                    <div class="row" style="box-shadow: 1px 1px 15px 5px #3c8dbc;margin: 10px 30px 40px 25px;padding: 30px 0px 30px 0px;">
                        <form action="<?= base_url('admin/contactpage/add'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="col-md-12">  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label> <?php echo $this->lang->line('branch_name'); ?></label>
                                            <input name="branch_name" placeholder="<?php echo $this->lang->line('branch_name'); ?>" class="form-control inner_shadow_primary" required="" type="text" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('email'); ?></label>
                                            <input name="email" placeholder="<?php echo $this->lang->line('email'); ?>" class="form-control inner_shadow_primary" required="" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('phone'); ?></label>
                                            <input name="phone" placeholder="<?php echo $this->lang->line('phone'); ?>" class="form-control inner_shadow_primary" type="tel" pattern="[0]{1}[1]{1}[5|6|7|8|9]{1}[0-9]{8}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('address'); ?></label>
                                            <textarea name="address" class="form-control inner_shadow_primary" rows="1" width="100%" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red"><?php echo $this->lang->line('reset') ?></button>
                                    <button type="submit" class="btn btn-sm bg-primary"><?php echo $this->lang->line('save') ?></button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="userListTable" class="table table-bordered table-striped table_th_primary">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('sl'); ?></th>
                                        <th><?php echo $this->lang->line('branch_name'); ?></th>
                                        <th><?php echo $this->lang->line('email'); ?></th>
                                        <th><?php echo $this->lang->line('phone'); ?></th>
                                        <th><?php echo $this->lang->line('address'); ?></th>
                                        <th><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($all_contact_page as $key => $value) {
                                            ?>
                                    <tr>
                                        <td> <?php echo ++$key ; ?> </td>
                                        <td> <?php echo $value->branch_name; ?> </td>
                                        <td> <?php echo $value->email; ?> </td>
                                        <td> <?php echo $value->phone; ?> </td>
                                        <td> <?php echo $value->address; ?> </td>
                                        <td> 
                                            <a href="<?php echo base_url('admin/contactpage/edit/'.$value->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('admin/contactpage/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick = 'return confirm("Are You Sure?")'><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class=" box-footer">
                    </div>
                    <!-- /.box-footer --> 
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
    </div>

</section>