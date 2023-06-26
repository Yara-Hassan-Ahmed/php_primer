<?php include 'host/header.php' ?>

<h1> for loop </h1>
    <?php
        for($count = 0; $count < 10; $count++){
            echo '<p>heyooo</p>';
        }
        for($count = 0; $count < 10; $count++){
            echo "<p>count: $count</p>";
        }
    ?>
    
    <?php require 'host/footer.php' ?>