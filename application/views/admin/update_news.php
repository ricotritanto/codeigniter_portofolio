   <?php require_once('tinymce.php') ?>

  <script src="<?php echo base_url();?>admin/vendors/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>
<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form News</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>akses/index/update_news">
                                      <fieldset>
                                        <legend>New News</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <input type="hidden" name="id" value="<?php echo $news[0]->id_news; ?>">
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" autocomplete="off" required data-provide="typeahead" data-items="4" value="<?php echo $news[0]->title; ?>">
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Category</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="category">
                                            <?php
                                              foreach ($news as $key ) 
                                              {
                                                  if($key->id_news==$news[0]->id_news)
                                                   {
                                                    echo "<option value=".$key->category." selected='selected'>".$key->category."</option>";
                                                   }else
                                                  ?>{
                                                      <option>Sport</option>
                                                      <option>Traveling</option>
                                                      <option>IT</option>
                                                      <option>other</option>
                                                       } <?php                                                 
                                              }
                                            ?>
                                            </select>
                                          </div>
                                        </div>                                                                                                      
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                          <img src="<?php echo base_url()?>uploads/<?php echo $news[0]->file_name; ?>">
                                            <input class="input-file uniform_on" id="fileInput" type="file" autocomplete="off" name="filefoto">
                                          </div>
                                        </div>                                  
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="desc" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"><?php echo $news[0]->desc; ?></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Date input</label>
                                          <div class="controls">
                                             <input type="text" class="input-xlarge datepicker" id="datepicker" name="date" value="<?php echo $news[0]->date; ?>">
                                            <p class="help-block"></p>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Source </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="source" autocomplete="off" required data-provide="typeahead" data-items="4" value="<?php echo $news[0]->source;?>">
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