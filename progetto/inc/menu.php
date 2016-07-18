

<div id="menu">	
    <ul id="navigation" >		
        <li><a href="../services/suDiNoi.php" ><strong>Su di noi</strong></a></li>
	<li><a href="../services/inSala.php"><strong>In Sala</strong></a></li>
	<li><a href="../services/tariffe.php"><strong>Tariffe</strong></a></li>
        <?php if ( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true) : ?>
            <?php if ( $_SESSION['level']=='cliente') : ?>
                <li><a href="../cliente/prenota.php"><strong>Prenota</strong></a></li>
            <?php else: ?>
                <li><a href="../admin/visualizzaPrenotazioni.php"><strong>Vedi Prenotazioni</strong></a></li>
                <li><a href="../admin/eliminaPrenotazioni.php"><strong>Elimina Prenotazioni</strong></a></li>
            <?php endif;?>   
            <li><a href="../services/logout.php"><strong>Logout</strong></a></li> 
        <?php else: ?>
            <li><a href="../services/login.php"><strong>Login</strong></a></li>
        <?php endif;?>
    </ul>	
</div>
