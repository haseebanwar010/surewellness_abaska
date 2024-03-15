<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Sections
      </h1>
<!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Sections With Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if($result)
                {
                    foreach($result as $record){
                    
                    
                ?>
                
                <tr>
                <td><?php echo $record->id;?></td>
                <?php 
                    $path_parts = pathinfo($record->image); 
                    $name=$path_parts['filename'];
                    $ext=$path_parts['extension'];
                ?>
                <td><img src="<?php echo base_url('uploads/thumb/'.$name.'_thumb.'.$ext);?>"/></td>
                <td><?php echo $record->title;?></td>
                
                <td>
                <a href="<?php echo base_url('admin/Showallservices/edit/'.$record->id); ?>" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $record->id; ?>">Delete</a>
<!--<a href="<?php echo base_url('admin/Showallservices/delete/'.$record->id); ?>" class="btn btn-danger">Delete</a>-->
                </td>
<div class="modal fade" id="exampleModal<?php echo $record->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Dialogue!</h5>
      </div>
      <div class="modal-body">
        Are You Sure You want to Delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<a href="<?php echo base_url('admin/Showallservices/delete/'.$record->id); ?>" id="btnYes" class="btn btn-danger">Yes! Delete it.</a> 
        <a ></a>
      </div>
    </div>
  </div>
</div>              
                
                
                
                
                
                
                
                
                </tr>
                
                <?php
                    }
                }      
                ?>
                
                </tbody>
<!--
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>