<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <?php
        session_start();
        if (isset($_POST['login']))
        {
            $_SESSION['loggedIn'] = false;
            if ( isset($_POST["utente"]) && isset($_POST["password"]))	
            {	
                if($_POST["utente"]=="admin" && $_POST["password"]=="flavia")
                {
                    $_SESSION['loggedIn']= true;
                    $_SESSION["level"]="admin";
                    header('Location: home.php');
                }
                else if($_POST["utente"]=="cliente" && $_POST["password"]=="flavia")
                {                    
                    $_SESSION['loggedIn']= true;
                    $_SESSION["level"]="cliente";
                    header('Location: home.php');
                }                
            }
        }
    ?>
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
                <input type="submit" name=login value="login"/>
            </form>
        </div>
        <?php include ('../inc/footer.php'); ?>
    </body>
    
   
</html>