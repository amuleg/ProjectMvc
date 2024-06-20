<html>
    <head>
    <title>Post - Index</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
        
    </style>
    </head>
    <body>
        <div class="container">
        <h1>Post - Index</h1>
        <table>
       
     
        <?php foreach ($data as $value) : ?>
            <tr>
            <td><?=$value['id']  ?></td>
            <td><?=$value['author_id']  ?></td>
            <td><?=$value['title']  ?></td>
            <td><?=$value['body']  ?></td>
            </tr>
            <?php endforeach ?>
            
      
        
           
       
        </table>
        </div>
       
       
    </body>
    </html>