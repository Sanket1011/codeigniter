<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type='text/css' href="/codeigniter/assets/css/login.css">
<script src="/codeigniter/assets/js/toasts.js"></script>

<body>
    <div class="container">

        <!-- Status message -->

        <div id="toast">
            <div id="img">Icon</div>
            <div id="desc">
                <?php  
                    if(!empty($success_msg)){
                        echo '<script> launch_toast() </script>';
                        echo '<p class="status-msg success">'.$success_msg.'</p>'; 
                    }elseif(!empty($error_msg)){ 
                        echo '<script> launch_toast() </script>';
                        echo '<p class="status-msg error">'.$error_msg.'</p>'; 
                    } 
                ?>
            </div>
        </div>

        <!-- Login form -->

        <section id="content">
            <form action="" method="post">
                <h1>Login Form</h1>
                <div>
                    <input type="text" name="email" placeholder="EMAIL" required="" id="username" />
                    <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="password" name="password" placeholder="PASSWORD" required="" id="password" />
                    <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="submit" name="loginSubmit" value="LOGIN" />
                    <a href="<?php echo base_url('users/registration'); ?>">Register</a>
                
                    
                </div>
            </form><!-- form -->
        </section><!-- content -->
    </div><!-- container -->
</body>