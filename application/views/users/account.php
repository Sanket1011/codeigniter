<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900"  type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<div class="container">
    <h2>Welcome <?php echo $user['first_name']; ?>!</h2>
    
    <div class="">
        <p><b>Name: </b><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Phone: </b><?php echo $user['phone']; ?></p>
        <p><b>Gender: </b><?php echo $user['gender']; ?></p>
        <a class="btn btn-info btn-xs" href="<?php echo base_url('users/useredit').'/'.$user['id']; ?>">Edit <i class="glyphicon glyphicon-pencil"></i></a>
    </div>
</div>