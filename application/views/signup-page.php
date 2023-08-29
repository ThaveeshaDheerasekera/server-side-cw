<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>public/assets/images/logo.png">
        <title>Developer Support</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>public/css/global-style.css' />
        <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/form-style.css" />
        <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/signup-page-style.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
    </head>

    <body>
        <div class="container" id="signup-form">
            <div class="header">
                <button><img></button>
                <h2>Sign Up</h2>
            </div>
            <div class="form-section">
                <div class="left">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input id="firstName" type="text" name="firstName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input id="lastName" type="text" name="lastName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confPassword">Confirm Password</label>
                        <input type="password" id="confPassword" class="form-control">
                    </div>
                </div>
            </div>
            <div class="btn-section">
                <button type="submit" id="signup-btn" class="btn sign-up-btn">Sign Up</button>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#signup-btn").click(function(event) {
                    event.preventDefault();

                    var firstName = $("input#firstName").val();
                    var lastName = $("input#lastName").val();
                    var username = $("input#username").val();
                    var email = $("input#email").val();
                    if ($("input#password").val() == $("input#confPassword").val()) {
                        var password = $("input#password").val();
                    } else {
                        
                    }

                    $.ajax({
                        method: "POST",
                        url: "<?php echo base_url(); ?>index.php/api/users/signup",
                        datatype: 'JSON',
                        data: {
                            first_name: firstName,
                            last_name: lastName,
                            username: username,
                            email: email,
                            password: password
                        },
                    }).done(function(data) {
                        if (data == true) {
                            alert("Signup Successful");
                            window.location.href = "<?php echo base_url(); ?>index.php/api/users/login";
                        } else {
                            alert("Signup Successful");
                            window.location.href = "<?php echo base_url(); ?>index.php/api/users/signup";
                        }
                    });
                });
            });
        </script>
    </body>

</html>