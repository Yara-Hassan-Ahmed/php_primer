<?php include 'host/header.php' ?>
    <h1>Hello world - PHP Primer</h1>
    <br/>
    <?php
        echo 'hello php!';
        echo '<br/>';
        echo 'second line';
        echo '<br/>';
    ?>

    <?php
        $name = 'Blah';
        $age = 22;
        echo $name;
        echo '<h1>name: '.$name.'</h1>';
        echo '<h1>age: '.$age.'</h1>';
    ?>

</body>
</html>