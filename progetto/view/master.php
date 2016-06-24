<?php
    include_once 'ViewDescriptor.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php $vd->getTitolo() ?></title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div id="logo">
         <?php
            $logo = $vd->getLogoFile();
            require "$logo";
        ?>
        </div>
        <?php
            $menu = $vd->getMenuFile();
            require "$menu";
        ?>
       
    </body>
</html>
