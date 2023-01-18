<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/add-answer-page-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global-style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="http://ajax.cdnjs.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
        <script src="http://ajax.cdnjs.com/ajax/libs/backbone.js/0.9.2/backbone-min.js"></script>
    </head>

    <body>
        <div class="main-container">
            <div class="header">
                <h1>Add Answer</h1>
            </div>
            <div class="text-section">
                <label for="answer"></label>
                <textarea class="answer" placeholder="Type you answer here"></textarea>
            </div>
            <button class="add-answer-btn">Add Answer</button>
        </div>
    </body>

</html>