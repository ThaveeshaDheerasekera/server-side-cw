<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/question-page-style.css">
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
                <pre class="date"><strong>Date:    </strong>15/01/2023</pre>
                <div class="question-area">
                    <p>Why does kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?Why does
                        kotlin/native hello world not output anything inside IntelliJ IDEA?</p>
                </div>
                <div class="btn-tag-panel">
                    <button class="answer-btn">Answer</button>
                    <div class="like-btn"><button><img></button>
                        <p>30</p>
                    </div>
                    <div class="dislike-btn"><button><img></button>
                        <p>15</p>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <?php for ($x = 0; $x <= 10; $x++) { ?>
                <div class="answer-card">
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
                        <p>Why does kotlin/native hello world not output anything inside IntelliJ
                            IDEA?</p>
                    </div>
                    <div class="right-section">
                        <div class="date">
                            <p>14/01/2023</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- <script>
        $(document).ready(function() {
            $('#answer-section').click(function(event) {
                event.preventDefault();
                console.log(this.className);
                if (this.className == 'answer-card') {
                    $('.answer-card').addClass('answer-card-extend');
                    $('#p-extend').addClass('p-extend');
                } else {
                    $('.answer-card').removeClass('answer-card-extend');
                    $('#p-extend').removeClass('p-extend');

                }
            })
        })
        </script> -->
    </body>

</html>