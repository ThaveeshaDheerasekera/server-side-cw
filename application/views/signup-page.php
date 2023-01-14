<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/global-style.css" />
    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/form-style.css" />
    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/signup-page-style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <div class="container">
        <div class="header">
            <span class="btn-span">
                <button><span class="material-symbols-outlined">arrow_back</span></button>
            </span>
            <h2>Sign Up</h2>
        </div>
        <div class="form-section">
            <div class="left">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="right">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confPassword">Confirm Password</label>
                    <input type="password" name="confPasswrod" class="form-control">
                </div>
            </div>
        </div>
        <div class="btn-section">
            <button class="btn sign-up-btn">Sign Up</button>
        </div>
    </div>
</body>


</html>
