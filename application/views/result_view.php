<!DOCTYPE html> <html>
<head>
<title>Search Result</title> <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="table-responsive"> <table class="table table-bordered">
<thead>
<tr>
<th>Image</th>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Status</th>
<!-- // <th>Description</th> <th>Description</th> -->
</tr>
</thead>
<tbody>
<!-- getting results array from search_keyword()
function from controller --> 
<?php foreach ($results as $row) {?>
<tr>
<td><?php echo $row->image?></td>
<td><?php echo $row->name?></td> <td><?php echo $row->description?></td>
<td><?php echo $row->price?></td> <td><?php echo $row->status?></td>
</tr>


<?php } ?>
</tbody>
</table>
</div>
