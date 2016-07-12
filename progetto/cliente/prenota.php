<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - Prenota</title>
        <?php
            session_start();
            include('../inc/head.php');   
         ?>
    </head>
    <body>
        <?php
            include ('../inc/header.php'); 
            include ('../inc/menu.php');
            include ('../sql/settings.php'); 
        ?>  
           
        
        <div class="box"> 
            <h2> Prenotazione </h2>
            <form action="prenota.php" method="post" id="prenota">
                <table>
                    <tr>
                        <td><label>Nome</label></td>
                        <td><input type="text" name="nome" id="nome" /></td>
                    </tr>
                    <tr>
                        <td><label>Cognome</label></td>
                        <td><input type="text" name="cognome" id="cognome" /></td>
                    </tr>
                    <tr>
                        <td><label>Spettacolo</label></td>
                        <td>
                            <select name="spettacolo">
                                <option value="American History X">American History X</option>
                                <option value="La Teoria del Tutto">La Teoria del Tutto</option>                               
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td><label>Data</label></td>
                        <td>
                            <select name="data">
                                <option value="2016/07/01">01/07/2016</option>
                                <option value="2016/07/02">02/07/2016</option>
                                <option value="2016/07/03">03/07/2016</option>
                                <option value="2016/07/04">04/07/2016</option>
                                <option value="2016/07/05">05/07/2016</option>
                                <option value="2016/07/06">06/07/2016</option>
                                <option value="2016/07/07">07/07/2016</option>
                                <option value="2016/07/08">08/07/2016</option>
                                <option value="2016/07/09">09/07/2016</option>
                                <option value="2016/07/10">10/07/2016</option>
                                <option value="2016/07/11">11/07/2016</option>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Orario</label></td>
                        <td>
                            <select name="orario">
                                <option value="19:30:00">19:30</option>
                                <option value="22:30:00">22:30</option>                               
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Numero Posti</label></td>
                        <td><input type="number" name="numPosti" id="numPosti" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="prenota" value="Prenota" /></td>
                    </tr>
                </table>
            </form>
            
            <?php if (isset($_POST['prenota'])): ?>
            <?php
                
                $errore = true;
                $db = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die ("impossibile connettersi al server");
                mysql_select_db(DB_NAME, $db) or die ("impossibile connettersi al database");
                
                $nome = $_POST['nome'];
                $cognome = $_POST['cognome'];
                $film= $_POST['spettacolo'];
                $data = $_POST['data'];
                $orario = $_POST['orario'];
                $num_posti=$_POST['numPosti'];
                
                
                if(trim($nome) == '' || trim($cognome) == ''|| trim($film) == ''|| trim($data) == ''|| trim($orario) == ''): ?>
                
                    <div class="messaggi_errore"> <strong>Errore, devi compilare tutti i campi</strong>  </div>

                    <?php  $errore = false; ?>

                <?php endif;?>
                    
                <?php if($errore):?>
                <?php
                    $query1="SELECT sala FROM Spettacoli WHERE data='$data' AND orario='$orario' and film='$film'";
                    $result1 = mysql_query($query1);
                    
                    if($result1==false|| !mysql_num_rows($result1)):?>
                        <div class="messaggi_errore"><strong>Spettacolo non trovato. Reinserire data e ora</strong></div>;
                    <?php else: ?>
                        <?php
                            $sala=mysql_result($result1, 0);
                            $query = "INSERT INTO Prenotazioni (nome, cognome, sala, data, orario, n_prenotati) 
                            VALUES ('$nome','$cognome', '$sala', '$data', '$orario', '$num_posti')";
                            $result = mysql_query($query);
                            if($result):?>
                                <div class="messaggi"><strong>Prenotazione avvenuta correttamente</strong></div>
                            <?php else: ?>
                                <div class="messaggi_errore"><strong>Inserimento non eseguito <?php mysql_error();?></strong><br> </div>;
                            <?php endif; ?>
                        
                    <?php endif; ?>
                                
                <?php endif;?>
                                
                <?php  mysql_close();/*chiudo la connessione*/?>
                    
            <?php endif;?>
                                
                                
        </div>

        
        <?php include ('../inc/footer.php'); ?>
    </body>
    
</html>


