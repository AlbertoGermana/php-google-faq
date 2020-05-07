<!DOCTYPE html>

<!-- GOAL:
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il "Database" e la visualizzazione di queste domande e risposte con PHP.
HINT:
Crearsi un array con i dati come l'ultimo esercizio visto a lezione (hotels) e usare un foreach per stampare i dati in esso contenuti -->
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP-google-faq</title>
    <?php
    require_once 'db.php';
    require_once 'functions.php'
    ?>
  </head>
  <body>
    <header>

      <div class="firstRow">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo">
        <h1>Privacy e Termini</h1>
      </div>

      <div class="secondRow">
        <ul>
          <li><a href="#">Introduzione</a></li>
          <li><a href="#">Norme sulla privacy</a></li>
          <li><a href="#">Termini di servizio</a></li>
          <li><a href="#">Tecnologie</a></li>
          <li><a class="selected" href="#">Domande frequenti</a></li>
        </ul>
        <a href="#">Account Google</a>
      </div>

    </header>
    <main>
      <div class="faqCounter">
        <p>Domande e risposte: <?php faqCount($faq); ?></p>
      </div>

      <div class="container">
        <?php

       stampaFaq($faq);

       ?>

    </div>

    </main>

  </body>
</html>
