<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/about-page-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global-style.css">
</head>

<body>
    <div class="navbar">
        <span class="leader">
            <img src="<?php echo base_url(); ?>public/assets/images/logo.png" alt="logo">
            <h2>Developer Support</h2>
            <button class="account-icon"><img src="<?php echo base_url(); ?>public/assets/images/user.png" alt="logo"></button>
        </span>
        <span class="navbar-items">
            <p><a href="<?php echo base_url('index.php/api/User/home'); ?>">Home</a></p>
            <p><a class="active" href="<?php echo base_url('index.php/api/User/home'); ?>">About</a></p>
        </span>
    </div>

    <div class="content">
        <h1>This is About Page</h1>
    </div>
</body>

</html>
