<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <title>Signup Page</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>

        <style type="text/css">
        body {
            background-image: linear-gradient(135deg, #eef0b9 10%, #825b45 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin-top: 20px;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        .box-form {
            margin: 0 auto;
            width: 50%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
            box-shadow: 0 0 20px 6px #090b6f85;
        }

        @media (max-width: 980px) {
            .box-form {
                flex-flow: wrap;
                text-align: center;
                align-content: center;
                align-items: center;
            }
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            color: #FFFFFF;
            background-color: #33302d;
            margin-left: 0px;
            width: 700px;
            overflow: hidden;
        }

        .box-form .left .overlay {
            padding: 10px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            box-sizing: border-box;
            align-self: center;
            margin-top: 100px;
        }

        .box-form .left .overlay p {
            margin-top: 250px;
            font-size: 16px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: white;
            text-align: center;
        }

        .box-form .right {
            padding: 40px;
            margin-left: 35px;
            overflow: hidden;
            align-items: center;
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
            }
        }

        .box-form .right p {
            font-size: 16px;
            color: black;
        }

        .box-form .right .inputs {
            overflow: hidden;
            padding: 20px;
        }

        .box-form .right input,
        select {
            padding: 10px;
            margin-top: 20px;
            margin-right: 70px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 16px;
            border: none;
            outline: none;
            border-bottom: 2px solid #B0B3B9;
        }

        .box-form .right button {
            float: right;
            color: white;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 12px 35px;
            border-radius: 50px;
            display: inline-block;
            margin-top: 30px;
            border: 0;
            outline: 0;
            cursor: pointer;
            background-image: linear-gradient(135deg, #453a2e 10%, #825b45 100%);
        }

        #infoMessage {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
        }
        </style>
    </head>


    <body>
        <div class="box-form" id="signup-view">
            <div class="left">
                <div class="overlay">
                    <img src="https://i.ibb.co/m843VZ2/logo2.png" alt="Bookgramlogo" style="width:310px;height:260px;">
                    <p>I am already a member <strong><a href="<?php echo base_url('/sign_in'); ?>"
                                style="color: #fafafa; "> Log In </a></strong></p>
                </div>
            </div>
            <div class="right">
                <div class="inputs">
                    <input id="username" type="text" placeholder="User name">
                    <br>
                    <input id="fname" type="text" placeholder="First name">
                    <input id="lname" type="text" placeholder="Last name">
                    <br>
                    <input id="email" type="email" placeholder="Email Address">
                    <br>
                    <input id="password" type="password" placeholder="New Password">
                    <br>
                    <input id="birthdate" type="date" id="birthday" name="birthday">
                    <br>
                    <select id="gender" name="gender">
                        <option value="none" selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button id='signup-btn'>Sign Up</button>
            </div>
        </div>
        <script>
        var apiUrl = "<?php echo base_url('api/users/signup'); ?>"
        var baseUrl = "<?php echo base_url('/'); ?>"

        var User = Backbone.Model.extend({
            url: apiUrl,
            defaults: {
                user_name: null,
                first_name: null,
                last_name: null,
                gender: null,
                birthdate: null,
                email: null,
                password: null
            },
            isValid: function() {
                if (this.get('user_name') == '') {
                    alert('Username is required!!!')
                    return false;
                } else if (this.get('first_name') == '') {
                    alert('First name is required!!!')
                    return false;
                } else if (this.get('last_name') == '') {
                    alert('Last name is required!!!')
                    return false;
                } else if (this.get('gender') == '') {
                    alert('Gender is required!!!')
                    return false;
                } else if (this.get('birthdate') == '') {
                    alert('Bithdate is required!!!')
                    return false;
                } else if (this.get('email') == '') {
                    alert('Email is required!!!')
                    return false;
                } else if (this.get('password') == '') {
                    alert('Password is required!!!')
                    return false;
                } else {
                    return true;
                }
            },
        });

        var SignUpView = Backbone.View.extend({
            model: User,
            events: {
                'click #signup-btn': 'signup'
            },
            signup: function(e) {
                e.preventDefault();

                var user = new User({
                    user_name: $('#username').val(),
                    first_name: $('#fname').val(),
                    last_name: $('#lname').val(),
                    gender: $('#gender').val(),
                    birthdate: $('#birthdate').val(),
                    email: $('#email').val(),
                    password: $('#password').val()
                });

                if (user.isValid()) {
                    user.save({}, {
                        async: false,
                        contentType: 'application/json',
                        dataType: 'text',
                        success: function(model, response) {
                            console.log("success");
                            alert('User created successfully');
                            window.location.href = baseUrl + 'sign_in';
                        },
                        error: function(model, response) {
                            console.log("error");
                            alert(
                                'Given username is already taken. Please provide a different username.');
                            window.location.href = baseUrl + 'signup';
                        }
                    });
                }
            },
        });

        var signUpView = new SignUpView({
            el: $('#signup-view')
        });
        </script>
    </body>

</html>