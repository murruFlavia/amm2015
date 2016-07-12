<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - In Sala</title>
        <?php
            session_start();
            include('../inc/head.php');           
         ?>
    </head>
    <body>
        <?php
            include ('../inc/header.php'); 
            include ('../inc/menu.php');           
        ?>
        <div id="content">
            <div class='box'>
                <h2>Sala Kubrick</h2>
                <img src="../images/american_history_x.jpg" class='image' alt="American History X - Locandina">
                <p><strong>American History X</strong>
                    <br> Dal 01/07 al 11/07 <br> <b>Spettacoli:</b> 19:30 - 22:30</p>
                
            </div>
            <div class='box'>
                <h2>Sala Tarantino</h2>
                <img src="../images/teoria_del_tutto.jpg" class='image' alt="La Teoria del Tutto - Locandina">
                <p><strong>La Teoria del Tutto</strong>
                    <br> Dal 01/07 al 11/07 <br> <b>Spettacoli:</b> 19:30 - 22:30</p>
                
            </div>
        </div>
        <?php include ('../inc/footer.php'); ?>
    </body>
    
</html>
