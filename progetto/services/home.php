<!--http://localhost/amm2015/progetto/index.php-->

 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - Home</title>
         <?php
            include('../inc/head.php');
         ?>
    </head>
    <?php 
            session_start();                   
    ?>
    <body>
        <?php
            include ('../inc/header.php'); 
            include ('../inc/menu.php');
        ?>
        <div class=box>
            <h2>News</h2>
            <p>Il cinema rimarrà chiuso per ferie dal 12 al 17 Agosto compresi.</p>
        </div>
        <?php include ('../inc/footer.php'); ?>
    </body>
    
</html>