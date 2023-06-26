<?php 
     $title = "Switch Statements";
    include 'host/header.php' ?>
<h1> Switch statement</h1>
    <?php
    $grade = 'B';
    switch($grade){
        case 'A':
            echo '<h2 style="color: green">excellent</h2>';
            break;
        case 'B':
            echo '<h2 style="color: blue">very good</h2>';
            break;
        default:
            echo '<h2 style="color: red">failed</h2>';
            break; 
    }
    ?>
 <?php require 'host/footer.php' ?>