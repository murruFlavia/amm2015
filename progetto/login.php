<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <?php
//session_start();	
  
if ( isset($_REQUEST["utente"]) && isset($_REQUEST["password"]))	
{	
    if($_REQUEST["utente"]=="admin" && $_REQUEST["password"]=="flavia")
    {
        echo "accesso effettuato come admin";  
    }
    else if($_REQUEST["utente"]=="cliente" && $_REQUEST["password"]=="flavia")
    {
        echo "accesso effettuato come cliente";
        include("cliente/homeCliente.php");
    }
    else
    {
        include("index.php");
    }
}
 ?>
    
     
       
    </body>
</html>

 