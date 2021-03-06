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
                                    <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>akses/index/save_news">
                                      <fieldset>
                                        <legend>New News</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" autocomplete="off" required data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Category</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="category">
                                              <option>Sport</option>
                                              <option>Traveling</option>
                                              <option>IT</option>
                                              <option>other</option>
                                            </select>
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
                                            <textarea class="input-xlarge textarea" id="wysihtml5" name="desc" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Date input</label>
                                          <div class="controls">
                                             <input type="text" data-format="MM/dd/yyyy HH:mm:ss PP" class="input-xlarge datepicker" id="datepicker" name="date">
                                            <p class="help-block"></p>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Source </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="source" autocomplete="off" required data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block"></p>
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
        
        
        <script>
  

        $(function() {
            $( "#datepicker" ).datepicker();
          
        });
        </script>
   </script>
    </body>