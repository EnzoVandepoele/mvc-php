<?php
   require('../src/model.php');
   $posts = getPosts();
   require('../templates/homepage.php');
?>

<!-- Défaut de code
   utilisation de die() pour les exceptions à la place de catch (exemple : utiliser catch())
   aucuns filtres de sécurité lors de l'ajout (exemple : utiliser filter_var())
   mélange du code PHP et HTML dans le même code (exemple : séparer le PHP et HTML dans deux codes distinct)
-->
