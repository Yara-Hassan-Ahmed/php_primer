   
   <?php 
        $title = "Index";
        include 'host/header.php' 
    ?>    <h1>Hello world - PHP Primer</h1>
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

<button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
    <?php
        require 'host/footer.php' 
    ?>