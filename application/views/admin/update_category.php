   <?php require_once('tinymce.php') ?>

  <script src="<?php echo base_url();?>admin/vendors/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>

<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Category</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>akses/index/update_category">
                                      <fieldset>
                                        <legend>Update Category</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Category </label>
                                           <input type="hidden" name="id" value="<?php echo $category[0]->id_category; ?>"> 
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" value="<?php echo $category[0]->name_category; ?>" autocomplete="off" required data-provide="typeahead" data-items="4">
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                        
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary" name="submit">Update changes</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
       