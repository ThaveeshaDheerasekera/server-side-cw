<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/home-page-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global-style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="http://ajax.cdnjs.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
        <script src="http://ajax.cdnjs.com/ajax/libs/backbone.js/0.9.2/backbone-min.js"></script>
    </head>

    <body>
        <!-- Navigation Bar -->
        <?php include 'application/views/nav-bar-widget.php';?>

        <div class="body">
            <div class="header">
                <h2>Top Questions</h2>
                <span class="content">
                    <button id="ask-question-btn" class="question-btn" onclick="viewAskQuestionPage()">Ask
                        Question</button>
                    <button class=" filter-btn"><img></button>
                    <span class="search-container">
                        <input type="text" name="search" placeholder="Search...">
                        <button class="search-btn" type="submit"><img></button>
                    </span>
                </span>
            </div>

            <div class="container">
                <?php foreach($questions as $row) { ?>
                <a href="<?php echo base_url(); ?>index.php/questions/question">
                    <div class="question-card">
                        <div class="rating-section">
                            <div class="like-btn">
                                <button><img></button>
                                <p>30</p>
                            </div>
                            <div class="dislike-btn">
                                <button><img></button>
                                <p>10</p>
                            </div>
                        </div>
                        <div class="vl"></div>
                        <div class="main-section">
                            <p><?=$row->title?></p>
                        </div>
                        <div class="right-section">
                            <div class="ans-box">
                                <p>10</p>
                            </div>
                            <div class="date">
                                <p><?=$row->created_at?></p>
                            </div>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>

        <script>
        function viewAskQuestionPage() {
            window.location.assign("<?php echo base_url(); ?>index.php/Questions/addQuestion")
        }
        </script>
    </body>

</html>