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

<form method="post" onsubmit="return validation()" action="<?php echo base_url('productsCreate');?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" id="name" class="form-control">
                    <span id="x" class ="text-danger font-weight-bold"> </span>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" id="desc" class="form-control"></textarea>
                    <span id="y" class ="text-danger font-weight-bold"> </span>

                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <textarea name="price" id="price" class="form-control"></textarea>
                    <span id="a" class ="text-danger font-weight-bold"> </span>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Status</label>
                <div class="col-md-9">
                    <textarea name="status" id="status" class="form-control"></textarea>
                    <span id="b" class ="text-danger font-weight-bold"> </span>
                </div>
            </div>
        </div>
       
        <div class="col-md-8 col-md-offset-2 pull-right">
            <button type="submit" name="Save" class="btn">Add Product</button>
        </div>
    </div>
    <?php echo validation_errors("<div class='alert alert-danger'>","</div>")?>
</form>
<script type ="text/javascript">
    function validation (){
        var x = document.getElementById('name').value;
        var y = document.getElementById('desc').value;
        var a = document.getElementById('price').value;
        var b = document.getElementById('status').value;
       
        if(x =="")
        {
            document.getElementById('x').innerHTML ="**Please fill the Name";
            return false;
        }
        if(y =="")
        {
            document.getElementById('y').innerHTML ="**Please fill the Description";
            return false;
        }
        if(a =="")
        {
            document.getElementById('a').innerHTML ="**Please fill the Price";
            return false;
        }
        if(b =="")
        {
            document.getElementById('b').innerHTML ="**Please fill the Status";
            return false;
        }
    }
    </script>
</body>