<div class="span9" id="content">
<div class="row-fluid">
<!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        	<div class="muted pull-left">Form Tutorial</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="<?php echo base_url();?>akses/index/add_tutorial"><button class="btn btn-success">Add tutorial <i class="icon-plus icon-white"></i></button></a>
                    </div>
                    <div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Picture</th>
                        <th>Description</th>
                        <th>date</th>
                        <th>source</th>
                        <th>Action</th>
                    
                    </tr>
                    </thead>
                   
                    <?php 
                    $i = $this->uri->segment('4') + 1;
                    
                     foreach ($tutorial as $row) 
                    {
                        //$text=$row->desc;  
                         $desc = word_limiter($row->desc,15); 
                         $source = word_limiter($row->source,3);                         
                        ?>

                        <tbody>
                            <tr class="odd gradeX">
                            <td><?php echo $i++;?></td>
                            <td><?php echo $row->name_category;?></td>
                            <td><img  src="<?php echo base_url()?>uploads/<?php echo $row->file_name;?>"></td>
                            <td><?php echo $desc;?></td>
                            <td><?php echo $row->date;?></td>
                            <td><?php echo $source;?></td>
                            <td class="center"><a href="<?php echo base_url('akses/index/edit_tutorial/'.$row->id_tutor); ?>"<button class="btn btn-primary btn-mini"><i class="icon-pencil icon-white"></i>Edit</a></button></td>
                            <td class="center"><a href="<?php echo base_url('akses/index/delete_tutorial/'.$row->id_tutor); ?>"<button class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a></button></td>
                            </tr>
                        </tbody>
                        <?php 
                    }                                                     
                    ?>
                </table> <div class"dataTables_paginate paging_bootstrap pagination"><?php echo $this->pagination->create_links();?>  </div> 
                </div>
                
        </div>
        </div>
    </div>
 <!-- /block -->     
</div> 
</div>       
