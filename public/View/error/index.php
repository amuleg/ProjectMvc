<html>
    <head>
    <title>Error - Index</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
        
    </style>
    </head>
    <body>
        <div class="container">
        <h1>Error - Index</h1>
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