<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Descrizione dell'applicazione</title>
    </head>
    <body>
        <h2>Descrizione dell'applicazione Cinema Pasolini</h2>
        
        <p> 
            Il progetto in questione rappresenta il sito di un cinema.             
        </p>
        
        <h3>Requisiti</h3>
        <p>Sono stati rispettati i seguenti requisiti:</p>
        <ol>
            <li>Utilizzo di HTML e CSS</li>
            <li>Utilizzo di PHP e MySQL</li>
            <li>Due ruoli: admin e cliente</li>
            <li>Una transazione nella funzione cancellaPrenotazioni (admin/eliminaPrenotazioni.php)</li>
        </ol>
        
        <h3>Credenziali</h3>
        <p>
            Si accede ai due ruoli effettuando il login con le seguenti credenziali (in caso di credenziali errate viene visualizzato un apposito messaggio di errore):
        </p>
        <ul>
            <li>
                Cliente
                <ul>
                    <li>Username: cliente</li>
                    <li>Password: flavia</li>
                </ul>
            </li>
            <li>
                Admin
                <ul>
                    <li>Username: admin</li>
                    <li>Password: flavia</li>
                </ul>
            </li>
        </ul>
        <p>Per passare da un ruolo all'altro si pu&ograve; effettuare il logout e successivamente il login.</p>
        
        <h3>Funzionalit&agrave;</h3>
        <ul>
            <li>
                <b>Cliente</b><br/>
                Il cliente pu&ograve; effettuare una o pi&ugrave; prenotazioni per gli spettacoli presenti, compilando l'apposito form nella sezione Prenota.<br/> 
                In caso di campi mancanti o di posti insufficienti, verranno visualizzati appositi messaggi di errore.
            </li>
            <li>
                <b>Admin</b><br/>
                L'admin pu&ograve; invece visualizzare le prenotazioni effettuate e/o cancellarle, tramite le apposite sezioni Vedi Prenotazioni e Elimina Prenotazioni
            </li>
            <li>
                <b>Utente non loggato</b><br/>
                L'utente non loggato pu&ograve; accedere alla home cliccando sul titolo "Cinema Pasolini" e alle sezioni Tariffe, Su di Noi e In Sala.
            </li>
        </ul>
            
        <br/>
        <p><b>Link alla homepage:</b><br/><a href="http://spano.sc.unica.it/amm2015/murruFlavia/progetto/services/home.php"> http://spano.sc.unica.it/amm2015/murruFlavia/progetto/services/home.php </a></p>
        <p><b>Repository GitHub:</b><br/><a href="https://github.com/murruFlavia/amm2015"> https://github.com/murruFlavia/amm2015 </a></p>
    </body>
</html>
