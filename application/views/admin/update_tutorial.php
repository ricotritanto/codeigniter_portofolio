   <?php require_once('tinymce.php') ?>

  <script src="<?php echo base_url();?>admin/vendors/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>
<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Tutorial</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>akses/index/update_tutorial">
                                      <fieldset>
                                        <legend>Update Tutorial</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <input type="hidden" name="id" value="<?php echo $tutorial[0]->id_tutor; ?>">
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" autocomplete="off" required data-provide="typeahead" data-items="4" value="<?php echo $tutorial[0]->title; ?>">
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Category</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="category">
                                            <?php
                                              foreach ($category as $key ) 
                                              {
                                                  if($key->id_category==$tutorial[0]->id_category)
                                                   {
                                                    echo "<option value=".$key->id_category." selected='selected'>".$key->name_category."</option>";
                                                   }else
                                                   { 
                                                      echo "<option value=".$key->id_category.">".$key->name_category."</option>";
                                                      
                                                    }                                                  
                                              }
                                            ?>
                                            </select>
                                          </div>
                                        </div>                                                                                                      
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                          <img src="<?php echo base_url()?>uploads/<?php echo $tutorial[0]->file_name; ?>">
                                            <input class="input-file uniform_on" id="fileInput" type="file" autocomplete="off" name="filefoto">
                                          </div>
                                        </div>                                  
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="desc" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"><?php echo $tutorial[0]->desc; ?></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Date input</label>
                                          <div class="controls">
                                             <input type="text" class="input-xlarge datepicker" id="datepicker" name="date" value="<?php echo $tutorial[0]->date; ?>">
                                            <p class="help-block"></p>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Source </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="source" autocomplete="off" required data-provide="typeahead" data-items="4" value="<?php echo $tutorial[0]->source;?>">
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
        
        
        <script>
  

        $(function() {
            $( "#datepicker" ).datepicker();
          
        });
        </script>
   </script>
    </body>