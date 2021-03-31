<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
  </head>

  <h1 style="color: black;  text-align: center;" >Online Shopping System</h1>
  <h2>PRODUCTS</h2>
	
<!-- Cart basket -->
<div class="cart-view">
    <a href="<?php echo base_url('cart'); ?>" title="View Cart">
    <i class="glyphicon glyphicon-shopping-cart "></i> 
    <span>(<?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?>) </span> 
    </a>
</div>


<div class="row col-lg-12">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="card col-lg-3">
            <img class="card-img-top" src="<?php echo base_url('uploads/product_images/'.$row['image']); ?>" alt="">
            <div class="card-body" style="color:'red'">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo ''.$row["price"].' Rs'; ?></h6>
                <p class="card-text"><?php echo $row["description"]; ?></p>
                <a href="<?php echo base_url('products/addToCart/'.$row['id']); ?>" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found...</p>
    <?php } ?>
</div>