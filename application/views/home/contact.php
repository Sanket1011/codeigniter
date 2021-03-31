<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url('assets/css/contact.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>
    <section class ="contact">
        <div class="content">
            <h2> Contact us</h2>
          
        </div>  
        <div class="container">
            <div class="contactInfo">
                
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <a class="p" href="tel:9981917761">(+91) 9137331618 </a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
</div>
                    <div class="text">
                        <h3>Email</h3>
                        <a class="p-1" href="mailto:abc@xento.com  ">abc@xento.com </a>
                               </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2> Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name=" " required="required">
                        <span>Full Name</span>
                    </div>
                
                <div class="inputBox">
                        <input type="text" name=" " required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required ="required"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name=" " value="Send">
                    </div>
                    </form>
            </div>
        </div>
    </section>  
</body>
</html>