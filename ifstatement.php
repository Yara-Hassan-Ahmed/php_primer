<?php include 'host/header.php' ?>

    <h3 style="color: green"></h3>
    <h1> If-Else statement</h1>
    
    <?php
    $grade = 80;
    if($grade >= 50){
        echo '<h3 style="color: green">you have passed</h3>';
    }
    else{
        echo '<h3 style="color: red">you have failed</h3>';
    }
    $grade = 'B';
    if($grade == 'A'){
        echo '<h2 style="color: green">excellent</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style="color: blue">very good</h2>';
    }
    else{
        echo '<h2 style="color: red">failed</h2>';
    }

    ?>
</body>
</html>