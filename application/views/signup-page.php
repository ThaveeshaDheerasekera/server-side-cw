<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

    <head>
        <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/global-style.css" />
        <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/form-style.css" />
        <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/signup-page-style.css" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                        <input id="userame" type="text" name="username" class="form-control">
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
                        <input type="password" name="confPasswrod" class="form-control">
                    </div>
                </div>
            </div>
            <div class="btn-section">
                <button id="signup-btn" class="btn sign-up-btn">Sign Up</button>
            </div>
        </div>

        <script>
        // var User = Backbone.Model.extends({
        //     uri: "<php echo base_url(); ?>api/users/signup",
        //     defaults: {
        //         first_name: null,
        //         last_name: null,
        //         username: null,
        //         email: null,
        //         password: null
        //     },
        //     isValid: function() {
        //         if (this.get('first_name') == '') {
        //             alert('First Name field is empty.')
        //             return FALSE;
        //         } else if (this.get('last_name') == '') {
        //             alert('Last Name field is empty.')
        //             return FALSE;
        //         } else if (this.get('username') == '') {
        //             alert('Username field is empty.')
        //             return FALSE;
        //         } else if (this.get('email') == '') {
        //             alert('Email field is empty.')
        //             return FALSE;
        //         } else if (this.get('password') == '') {
        //             alert('Password field is empty.')
        //             return FALSE;
        //         } else {
        //             return TRUE;
        //         }
        //     },
        // });

        // var Signup = Backbone.View.extends({
        //     model: User,
        //     events: {
        //         'click #signup-btn': 'signup'
        //     },
        //     signup: function(e) {
        //         e.preventDefault();

        //         var user = new User({
        //             first_name: $('#firstName').val(),
        //             last_name: $('#lastName').val(),
        //             username: $('#username').val(),
        //             email: $('#email').val(),
        //             password: $('#password').val()
        //         });

        //         if (user.isValid()) {
        //             user.save({}, {
        //                 async: FALSE,
        //                 contentType: 'application/json',
        //                 dataType: 'text',
        //                 success: function(model, response) {
        //                     alert('Succesfully created the User');
        //                     window.location.href =
        //                         "<?php echo base_url(); ?>index.php/users/signup";
        //                 }
        //             });
        //         }
        //     },
        // });

        // var signup = new Signup({
        //     el: $('#signup-form')
        // });
        </script>

    </body>


</html>