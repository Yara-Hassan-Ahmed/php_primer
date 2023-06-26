<?php include 'host/header.php' ?>

<h1>arrays</h1>
    <?php
        //var
        $num = 3;

        //array
        $numb = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
        echo $numb[5];

        echo "<p>$numb[9]</p>";

        $size = count($numb);
        echo "<p>array numb size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numb[$count]</p>";
        }
    ?>   
    
</body>
</html>