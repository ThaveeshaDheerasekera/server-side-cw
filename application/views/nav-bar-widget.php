<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/navbar-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global-style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    </head>

    <body>
        <div class="navbar">
            <span class="leader">
                <img src="<?php echo base_url(); ?>public/assets/images/logo.png" alt="logo">
                <h2>Developer Support</h2>
                <button><img></button>
            </span>
            <span class="navbar-items">
                <p><a href="<?php echo base_url(); ?>index.php/questions/index">Home</a></p>
                <p><a href="<?php echo base_url(); ?>index.php/questions/about">About</a></p>
            </span>
        </div>
    </body>

</html>