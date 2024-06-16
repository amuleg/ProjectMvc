<html>
    <head>
    <title>User - Test</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
        
    </style>
    </head>
    <body>
        <div class="container">
        <h1>User - Test</h1>
        <?php
        
        define('F00', 10);
     $array = array(10 => F00 , "F00" => 20);
     echo $array[$array[F00]] * $array["F00"];
   
        ?>
        <table>
       
        <tr>
        <?php foreach ($first as $value) : ?>

            <td><?= $value ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
        <?php foreach ($second as $value) : ?>

            <td><?= $value ?></td>
            <?php endforeach ?>
        </tr>      
       
        </table>
        </div>
       
       
    </body>
    </html>