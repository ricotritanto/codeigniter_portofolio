   <?php require_once('tinymce.php') ?>

  <script src="<?php echo base_url();?>admin/vendors/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/bootstrap-datepicker.js"></script>

<div class="span9" id="content">
 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Portfolio</div>
                            </div>
                            
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>akses/index/update_portfolio">
                                      <fieldset>
                                        <legend>New Portolio</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                           <input type="hidden" name="id" value="<?php echo $portfolio[0]->id_portfolio; ?>"> 
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" value="<?php echo $portfolio[0]->title; ?>" autocomplete="off" required data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Category</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="place">
                                            <?php
                                              foreach ($portfolio as $key ) 
                                              {
                                                  if($key->id_portfolio==$portfolio[0]->id_portfolio)
                                                   {
                                                    echo "<option value=".$key->id_portfolio." selected='selected'>".$key->category."</option>";
                                                   }else
                                                  ?>{
                                                    <option>pemrograman</option>
                                                    <option>network</option>
                                                    <option>website</option>
                                                    <option>traveling</option>
                                                    <option>other</option>;
                                                   } <?php
                                                  
                                              }
                                            ?>
                                            </select>
                                          </div>
                                        </div>                                                                                                          
                                       
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description picture</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" id="wysihtml5" name="desc_picture" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"><?php echo $portfolio[0]->description_picture; ?></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" required id="wysihtml5" name="desc" autocomplete="off" placeholder="Enter text ..." style="width: 810px; height: 200px"><?php echo $portfolio[0]->description_portofolio; ?></textarea>
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
                        <!-- /block -->
                    </div>
        