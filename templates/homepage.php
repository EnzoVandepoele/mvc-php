<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Le blog de l'AVBN</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Le super blog de l'AVBN !</h1>
        <p>Derniers billets du blog :</p>

        <?php
        foreach ($posts as $post) {
        ?>
            <div class="news">
                <h3>
                    <!-- Je n'ai pas remplacé par le raccourci sans echo car cette méthode n'est pas configuré pour
                    mon serveur php donc ça ne fonctionne pas pour moi -->
                    <?php echo htmlspecialchars($post['title']); ?>
                    <em>le <?php echo $post['french_creation_date']; ?> </em>
                </h3>
                <p>
                    <?php
                        // We display the post content.
                        echo nl2br(htmlspecialchars($post['content']));
                    ?>
                    <br />
                    <em><a href="#">Commentaires</a></em>
                </p>
            </div>
            <?php
        } // The end of the posts loop.
        ?>
    </body>
</html>

<!-- Défaut de code Question 1.4
   utilisation de die() pour les exceptions à la place de catch (exemple : utiliser catch())
   aucuns filtres de sécurité lors de l'ajout (exemple : utiliser filter_var())
   mélange du code PHP et HTML dans le même code (exemple : séparer le PHP et HTML dans deux codes distinct)
-->
