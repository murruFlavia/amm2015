<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema Pasolini - Su di noi</title>
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
        <div class=box>
            <h2>Chi Siamo</h2>
            <div id='su_di_noi'>
                <p> 
                    Il Cinema Pasolini &egrave; un Cineclub privato, nato nel 1998 dalla passione per l'arte del suo fondatore Mario Rossi.
                    <br/>
                    Dispone di due ampie Sale: Kubrick e Tarantino, entrambe di 80 posti e climatizzate, con comode poltrone in velluto. 
                    <br/>
                    Si trova in un bellissimo palazzo antico in pieno centro storico a Cagliari, facilmente raggiungibile a piedi e con i mezzi pubblici.
                    <br/>
                    &Egrave; dotato inoltre di un ampio foyer con distributore automatico e bar.
               
                </p>
             </div>
        </div>
        <?php include ('../inc/footer.php'); ?>
    </body>
    
</html>
