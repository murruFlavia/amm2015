<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - Login</title>
        <?php
            include('../inc/head.php');
         ?>
    </head>
    
    <body>
        <?php
            include ('../inc/header.php'); 
            include ('../inc/menu.php');
        ?>
        <div class='box'>
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="hidden" name="sessionid"/>
                <label for="utente">Nome Utente</label>
                <input type="text" name="utente" id="utente"/>
                <label for="password">Password</label>
                <input type="password" name="password" id="password"/> 
                <br/>
                <input type="submit" name=login value="Login"/>
        </form>
        </div>
    </body>
    <?php include ('../inc/footer.php'); ?>
</html>
