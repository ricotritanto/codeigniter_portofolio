   <?php require_once('tinymce.php') ?>

  <script src="<?php echo base_url();?>admin/vendors/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>
  
<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form About me</div>
                            </div>
                            <?php
                              //Kita akan melakukan looping terhadap variable $product yang telah dikirimkan melalui controller
                          foreach($about->result() as $detail)
                          {
                       ?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>akses/index/update_about">
                                      <fieldset>
                                        <legend>Update Aboutme</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" autocomplete="off" required data-provide="typeahead" data-items="4" value="<?php echo $detail->title;?>">
                                            <p class="help-block"></p>
                                          </div>
                                          </div>    
                                          <input type="hidden" name="id" value="<?php echo $detail->id_me; ?>">                                                                                                                        
                                        <div class="control-group">                                        
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                          <img src="<?php echo base_url()?>uploads/<?php echo $detail->file_name; ?>">
                                            <input class="input-file uniform_on" id="fileInput" type="file"  autocomplete="off" name="filefoto">
                                          </div>
                                        </div>                                       
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" required id="wysihtml5" name="desc" autocomplete="off" style="width: 810px; height: 200px"><?php echo $detail->desc;?></textarea>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                         <?php
                        }    
                    ?>
                        <!-- /block -->
                    </div>
        <link href="<?php echo base_url();?>admin/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>admin/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>admin/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url();?>admin/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="<?php echo base_url();?>admin/vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>admin/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>admin/vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>admin/vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>

        <script src="<?php echo base_url();?>admin/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url();?>admin/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?php echo base_url();?>admin/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>admin/assets/form-validation.js"></script>
        
        <script src="<?php echo base_url();?>admin/assets/scripts.js"></script>
        