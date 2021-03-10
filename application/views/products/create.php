<script

src="https://ajax.googleapis.com/ajax/libs/jquery /3.2.1/jquery.min.js"></script>

<script

src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<title> ADD New product</title>
</head>
<body>
<h2> New Product Details</h2>
<div class = "container">
<div class ="row">

<form method="post" action="<?php echo base_url('productsCreate');?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <textarea name="price" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Status</label>
                <div class="col-md-9">
                    <textarea name="status" class="form-control"></textarea>
                </div>
            </div>
        </div>
       
        <div class="col-md-8 col-md-offset-2 pull-right">
            <button type="submit" name="Save" class="btn">Add Product</button>
        </div>
    </div>
    <?php echo validation_errors("<div class='alert alert-danger'>","</div>")?>
</form>
</body>