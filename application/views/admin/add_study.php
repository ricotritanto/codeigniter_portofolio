   <?php require_once('tinymce.php') ?>

  <script src="<?php echo base_url();?>admin/vendors/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>

<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Study</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>akses/index/save_study">
                                      <fieldset>
                                        <legend>New Study</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" autocomplete="off" required data-provide="typeahead" data-items="4">
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea"  id="wysihtml5" name="desc" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
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
       