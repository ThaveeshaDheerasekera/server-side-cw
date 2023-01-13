<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/home-page-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/navbar-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global-style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    </head>

    <body>
        <div class="navbar">
            <span class="leader">
                <img src="<?php echo base_url(); ?>public/assets/images/logo.png" alt="logo">
                <h2>Developer Support</h2>
                <button class="account-icon">
                    <span class="material-icons-outlined account-circle">account_circle</span>
                </button>
            </span>
            <span class="navbar-items">
                <p><a class="active" href="<?php echo base_url('index.php/api/User/home'); ?>">Home</a></p>
                <p><a href="<?php echo base_url('index.php/api/User/about'); ?>">About</a></p>
            </span>
        </div>

        <div class="body">
            <div class="header">
                <h2>Top Questions</h2>
                <span class="content">
                    <button class="question-btn">Ask Question</button>
                    <button class="filter-btn">
                        <span class="material-icons-outlined filter-alt">filter_alt</span>
                    </button>
                    <span class="search-container">
                        <input type="text" name="search" placeholder="Search...">
                        <button class="search-btn" type="submit">
                            <span class="material-icons-outlined search">search</span>
                        </button>
                    </span>
                </span>
            </div>

            <div class="container">
                <?php for ($x = 0; $x <= 10; $x++) { ?>
                <div class="question-card">
                    <div class="rating-section">
                        <div class="like-btn">
                        </div>
                        <div class="dislike-btn"></div>
                    </div>
                    <div class="vl"></div>
                    <div class="main-section">
                        <p>Middle</p>
                    </div>
                    <div class="right-section">
                        <p>right</p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>

</html>