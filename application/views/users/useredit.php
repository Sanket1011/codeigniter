<html>
<head>
    <title>Update Your Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<h2>Edit the Profile Details: </h2>

<form method="post" action="<?php echo base_url('Users/userupdate/'.$product->id);?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="container">First Name</label>
                <div class="col-md-6">
                    <input type="text" name="first_name" class="form-control" value="<?php echo $product->first_name; ?>"required='<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>'>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
            <label class="container">Last Name</label>
                <div class="col-md-6">
                    <input type="text" name="last_name" class="form-control" value="<?php echo $product->last_name; ?>"required='<?php echo form_error('last_name','<p class="help-block">','</p>'); ?>'>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="container">Email</label>
                <div class="col-md-6">
                    <input type="text" name="email" class="form-control"value="<?php echo $product->email; ?>"required='<?php echo form_error('email','<p class="help-block">','</p>'); ?>'>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="container">Phone</label>
                <div class="col-md-6">
                    <input type="text" name="phone"class="form-control" value="<?php echo $product->phone; ?>" required='<?php echo form_error('phone','<p class="help-block">','</p>'); ?>'>
                  
                </div>
            </div>    
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="container">Status</label>
                <div class="col-md-6">
                    <input type="number" min="0" max="1" name="status" class="form-control" value="<?php echo $product->status; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 pull-right"> 
        <!-- <a class="btn btn-info btn-xs" href="<?php// echo base_url('users/userupdate').'/'.$product->id ?>"></a> -->
            <input type="submit" name="Save" class="btn btn-info btn-xs">
        </div>
    </div>
    
</form>
