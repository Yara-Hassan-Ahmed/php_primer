<?php 
     $title = "While Loop";
    include 'host/header.php' ?>
    <h1>while loop</h1>
    <?php
        $grade = 0;
        //infinite loop 
        // while($grade<10){
        //     echo '<p>less than 10</p>';
        // }
        //precondition loop
        while($grade<10){
            echo '<p>less than 10</p>';
            $grade++;
        }
        echo 'exit loop!';
    ?>
    <h1>do while loop</h1>
    <?php
        //post condition loop
        $grade = 0;
        do{
            echo '<p>do while loop</p>';
            $grade++; 
        }while($grade<10);
        echo 'exit loop!';
    ?>
<?php require 'host/footer.php' ?>