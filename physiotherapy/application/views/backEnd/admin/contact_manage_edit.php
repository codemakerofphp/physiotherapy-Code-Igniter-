

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"> <?php echo $this->lang->line('update_contact_manage'); ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url() ?>admin/contactmanage/list" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('contact_manage_list'); ?> </a>
                    </div>
                </div>
                <div class="box-body">
                    <form action="<?php echo base_url('admin/contactmanage/edit/'.$contact_manage_edit->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row">
                            <br><br>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="title_two" class="control-label"><?php echo $this->lang->line('name'); ?></label>
                                            <input name="name" class="form-control inner_shadow_red" type="text" value="<?php echo $contact_manage_edit->name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="title_two" class="control-label"><?php echo $this->lang->line('email'); ?></label>
                                            <input name="email" class="form-control inner_shadow_red" type="email" value="<?php echo $contact_manage_edit->email; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="title_two" class="control-label"><?php echo $this->lang->line('phone'); ?></label>
                                            <input name="phone" class="form-control inner_shadow_red" type="tel" pattern="[0]{1}[1]{1}[5|6|7|8|9]{1}[0-9]{8}" value="<?php echo $contact_manage_edit->phone; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="title_two" class="control-label"><?php echo $this->lang->line('address'); ?></label>
                                            <textarea name="address" class="form-control inner_shadow_red" rows="1" width="100%" ><?php echo $contact_manage_edit->address; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="body" class="control-label" > <?php echo $this->lang->line('message_body'); ?> </label>
                                            <textarea name="message_body" class="form-control inner_shadow_red" rows="" width="100%" ><?php echo $contact_manage_edit->message_body; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-danger"><?php echo $this->lang->line('cancel'); ?></button>
                                <button type="submit" class="btn bg-aqua"><?php echo $this->lang->line('update'); ?></button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>

