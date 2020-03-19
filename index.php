<?php
//chiamata
$author = $_GET['autore'];
$badword = $_GET['badword'];
//testo
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
//testo modificato
$testoModificato = str_replace($badword,'<span class="text_color">***</span>', $testo);
//immagine
$img = 'https://www.wizardweb.it/wp-content/uploads/2019/06/Imparare-il-php-1.png';
$alt = 'Errore caricamento immagine!';
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Php Badwords</title>
     <!-- inizio css -->
     <style media="screen">
       .text_color {
         color: red;
       }
     </style>
     <!-- fine css -->
   </head>
   <body>
     <!-- immagine -->
     <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>">
     <!-- primo paragrafo -->
     <p data-author='<?php echo $author; ?>'><?php echo $testo; ?></p>
     <p>Lunghezza paragrafo: <?php echo strlen($testo); ?></p>
     <!-- secondo paragrafo modificato -->
     <p data-author='<?php echo $author; ?>'><?php echo $testoModificato; ?></p>
     <p>Lunghezza paragrafo: <?php echo strlen($testoModificato); ?></p>
   </body>
 </html>
