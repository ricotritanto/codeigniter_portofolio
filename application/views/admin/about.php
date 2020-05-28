<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form About me</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>akses/index/save_aboutme">
                                      <fieldset>
                                        <legend>New About</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" autocomplete="off" required data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block"></p>
                                          </div>
                                          </div>                                                                                                                            
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" required id="fileInput" type="file" autocomplete="off" name="filefoto">
                                          </div>
                                        </div>                                       
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" required id="wysihtml5" name="desc" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
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


         