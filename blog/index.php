<?php
   // We connect to the database.
   try {
      $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
   } catch(Exception $e) {
      die('Erreur : '.$e->getMessage());
   }

   // We retrieve the 5 last blog posts.
   $statement = $database->query(
      "SELECT id, titre, contenu, DATE_FORMAT(date_creation,
      '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr
      FROM billets ORDER BY date_creation DESC LIMIT 0, 5"
   );

   $posts = [];
   while (($row = $statement->fetch())) {
      $post = [
         'title' => $row['titre'],
         'french_creation_date' => $row['date_creation_fr'],
         'content' => $row['contenu'],
      ];
      $posts[] = $post;
   }

   require('../templates/homepage.php');
?>

<!-- Défaut de code
   utilisation de die() pour les exceptions à la place de catch (exemple : utiliser catch())
   aucuns filtres de sécurité lors de l'ajout (exemple : utiliser filter_var())
   mélange du code PHP et HTML dans le même code (exemple : séparer le PHP et HTML dans deux codes distinct)
-->
