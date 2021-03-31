<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type='text/css' href="/codeigniter/assets/css/register.css">
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

        <section id="content">
            <form action="" method="post">
                <h1>Registration Form</h1>

                <div>
                    <input type="text" name="first_name" placeholder="FIRST NAME" id="username"
                        value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                    <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="text" name="last_name" placeholder="LAST NAME" id="username"
                        value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                    <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="text" name="email" placeholder="EMAIL" id="email"
                        value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                    <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="password" name="password" placeholder="PASSWORD" id="password" required>
                    <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="password" name="conf_password" placeholder="CONFIRM PASSWORD" id="password" required>
                    <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <label>Gender: </label>
                    <?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                            Female
                        </label>
                    </div>
                </div>
                <div>
                    <input type="text" name="phone" placeholder="PHONE NUMBER" id="phone"
                        value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                    <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
                </div>
                <div>
                    <input type="submit" name="signupSubmit" value="CREATE ACCOUNT" />
                    <a href="<?php echo base_url('users/login'); ?>">Already have an account?</a>
                </div>
            </form><!-- form -->
        </section><!-- content -->
    </div><!-- container -->
</body>