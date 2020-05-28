<div class="span9" id="content">
<div class="row-fluid">
<!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        	<div class="muted pull-left">Bootstrap dataTables with Toolbar</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="<?php echo base_url();?>akses/index/add_job"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
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
                        <th>Client</th>
                        <th>Picture</th>
                        <th>Description simple</th>
                        <th>Description all</th>
                        <th>Action</th>
                    
                    </tr>
                    </thead>
                     <?php 
                     $i = $this->uri->segment('4') + 1;
                     foreach ($myjob as $row) 
                    {
                        ?>
                            <tbody>
        					<tr class="odd gradeX">
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row->title;?></td>
                                <td><?php echo $row->client;?></td>
                                <td><img  src="<?php echo base_url()?>uploads/<?php echo $row->file_name;?>"></td>
                                <td><?php echo $row->descone;?></td>
                                <td><?php echo $row->desctwo;?></td>
                                <td class="center"><a href="<?php echo base_url('akses/index/edit_myjob/'.$row->id_job); ?>" <button class="btn btn-primary btn-mini"><i class="icon-pencil icon-white"></i>Edit</a></button></td>
                                <td class="center"><a href="<?php echo base_url('akses/index/delete_myjob/'.$row->id_job); ?>"<button class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a></button></td>
                            </tr>                                                                             
                    </tbody>
                     <?php 
                    }                                                     
                    ?>
                </table>
            </div><?php echo $this->pagination->create_links();?>
        </div>
    </div>
 <!-- /block -->     
</div> 
</div>       
 <script src="<?php echo base_url();?>admin/vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>admin/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>admin/vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="<?php echo base_url();?>admin/assets/scripts.js"></script>
        <script src="<?php echo base_url();?>admin/assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>         