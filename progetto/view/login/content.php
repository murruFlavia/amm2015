<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="login" method="post">
            <!--<input type="hidden" name="log" value="login"/>-->
            <label for="nome">Nome Utente</label>
            <input type="text" name="utente" id="utente"/>
            <br/>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"/> 
            <br/>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>
