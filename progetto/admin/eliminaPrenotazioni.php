<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - Elimina Prenotazioni</title>
         <?php
            session_start();
            include('../inc/head.php');
         ?>
    </head>
    <body>
        <?php
            include ('../inc/header.php'); 
            include ('../inc/menu.php');
            include ('../sql/settings.php')
        ?>
        <div id="content">
            <div class=box>
                <h3>Eliminazione Prenotazioni</h3>
                <p>Tutte le prenotazioni verranno eliminate. Proseguire?</p>
                <form action="eliminaPrenotazioni.php" method="post">
                    <input type="submit" name="scelta" value="SI"/>
                    <input type="submit" name="scelta" value="NO"/>
                </form>
                <?php if (isset($_POST['scelta']))
                {                   
                    if ( $_POST['scelta']=='SI')
                        cancellaPrenotazioni();
                    else
                        header('Location: ../services/home.php');
                } ?>
            </div>
        </div>
        <?php include ('../inc/footer.php'); ?>
    </body>
    
</html>

<?php
    function cancellaPrenotazioni()
    {
        $mysqli = new mysqli();
        $mysqli->connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        
        //Inizio transazione
	$mysqli->autocommit(false);	

        $query="DELETE FROM Prenotazioni";
        $result = $mysqli->query($query);
        
        if (!$result): ?>
            </br>
            <div class="messaggi_errore"><strong>Eliminazione non eseguita <?php echo mysql_error();?> </strong><br></div>
        <?php $mysqli->rollback(); ?>
        <?php else: ?>
            </br>
            <div class="messaggi"><strong> Eliminazione effettuata </strong><br></div>
       <?php endif;?>
        
	<?php		
	$mysqli->commit();
	$mysqli->autocommit(true); 
	
	//Fine transazione
	
        $mysqli->close();
        
    }
?>