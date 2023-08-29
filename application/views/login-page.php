<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/login-page-style.css">
    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/form-style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global-style.css">
</head>

<body>
    <div class="container">
        <div class="info-section">
            <img src="<?php echo base_url(); ?>public/assets/images/logo.png" alt="Logo">
            <h1>Developer Support</h1>
        </div>
        <div class="vl"></div>
        <div class="form-setion">
            <div class="header">
                <h2>Login</h2>
            </div>
            <div class="input-section">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="btn-panel-row">
                <button class="btn sign-up-btn">Sign Up</button>
                <div class="btn-panel-column">
                    <div class="login-cancel-btns">
                        <button class="btn cancel-btn">Cancel</button>
                        <button class="btn login-btn">Login</button>
                    </div>
                    <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
