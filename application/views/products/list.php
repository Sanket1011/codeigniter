<div class="row">
    <div class="col-lg-12">           
        <h2>Inventory           
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('AdminProducts/create') ?>"> Add New Product</a>
            </div>
        </h2>
     </div>
</div>
<form action="<?php echo site_url('AdminProducts/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
<a class="btn btn-primary" href="<?php echo base_url('AdminProducts/reports') ?>"> Reports</a>

 
</form>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Status</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->id; ?></td> 
          <td><?php echo $d->name; ?></td>
          <td><?php echo $d->description; ?></td>    
          <td><?php echo $d->price; ?></td>      
          <td><?php echo $d->status; ?></td>    
      <td>
        <form method="DELETE" action="<?php echo base_url('AdminProducts/delete/'.$d->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('AdminProducts/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>

</div>