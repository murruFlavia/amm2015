<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - Prenotazioni</title>
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
        
        <?php
            $db = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die ("impossibile connettersi al server");
            mysql_select_db(DB_NAME, $db) or die ("impossibile connettersi al database");
            $query="SELECT * FROM Prenotazioni JOIN Spettacoli ON Prenotazioni.sala=Spettacoli.sala "
                    . "AND Prenotazioni.data=Spettacoli.data AND Prenotazioni.orario=Spettacoli.orario";
            $risultati=mysql_query($query);
            $num=mysql_numrows($risultati);
            mysql_close();
        ?>
        
        <div class=box>
            <h2>Prenotazioni effettuate</h2>
            <br/>
            
            <?php if( $num == 0 ):?>
                <p><strong>Al momento non sono state effettuate prenotazioni</strong> </p> 
                
            <?php else:?>
                <?php
                    $i=0;
                    while ($i < $num) 
                    {                    
                        $nome=mysql_result($risultati,$i,"nome");
                        $cognome=mysql_result($risultati,$i,"cognome");
                        $film=mysql_result($risultati,$i,"film");
                        $data=mysql_result($risultati,$i,"data");
                        $orario=mysql_result($risultati,$i,"orario");
                        $num_posti=mysql_result($risultati,$i,"n_prenotati");
                        $sala=mysql_result($risultati,$i,"sala");
                ?>
                
                <table>
                    <tr>
                        <th>Nome</th>
                        <td><?php echo  $nome ?></td>
                    </tr>
                    <tr>
                        <th>Cognome</th>
                        <td><?php echo  $cognome ?></td>
                    </tr>
                    <tr>
                        <th>Data</th>
                        <td><?php echo  $data ?></td>
                    </tr>
                    <tr>
                        <th>Orario</th>
                        <td><?php echo  $orario ?></td>
                    </tr>
                    <tr>
                        <th>Posti prenotati</th>
                        <td><?php echo  $num_posti ?></td>
                    </tr>
                    <tr>
                        <th>Sala</th>
                        <td><?php echo  $sala ?></td>
                    </tr>
                    <tr>
                        <th>Film</th>
                        <td><?php echo  $film ?></td>
                    </tr>
                </table>
                
                <?php if ($i!=$num-1):?>
                    <hr/>
                <?php endif;?>
                    
            <?php $i++; }?>
                    
            <?php endif;?>
            
        </div>
        <?php include ('../inc/footer.php'); ?>
    </body>
    
</html>
