<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jan Šlouf">
    <title>Document</title>
    <link rel="stylesheet" href="styly.css">
    <style>
        .flex-container {
          display: flex;
        }
        
        .flex-container > div {
         padding: 20px;
        }
        
        </style>


</head>
<body>
    <header>
        <h2>Formulář na vyplnění hesla</h2> 
    </header>
    
<div class="flex-container">   
    <nav>
        <h3>Odkazy mezi stránkami</h3>
        <a href="strana 1.html">rizika</a>
        <a href="strana 2.html">Heslo</a>
        <a href="strana 3.html">nejhorší hesla</a>
    </nav>
    
    <main>
    <?php
    echo Vaše heslo
    ?>    
    </main>
   
    <aside>
        <h3>Odkazy na zdroje</h3>
        <a href="https://cs.wikipedia.org/wiki/Webov%C3%A1_aplikace">Webová aplikace</a>
        <a href="https://cs.wikipedia.org/wiki/Bezpe%C4%8Dnost_na_internetu">Bezpečnost</a>
        <a href="https://zdrojak.cz/clanky/10-nejzavaznejsich-zranitelnosti-webovych-aplikaci-podle-owasp/">rizika</a>
        <a href="https://cs.wikipedia.org/wiki/Heslo">Heslo</a>
    </aside>
</div>
    <footer>
    <P>Jan Šlouf, David Záhořík, Jakub Nový</P>
    
        
</html>