<?php

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        if(isset($_POST['nom'])){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            
            include_once './personne.php';
            $instancePersonne =
                    new Personne($post['nom'],
                                 $post['prenom'],
                                 $post['age'],
                                 $post['region']);
            
            echo '<pre>';
            var_dump($instancePersonne);
            echo '</pre>';
        }
        
        ?>
        <div>FORMULAIRE</div>
        <form method="POST" action="#">
            <label>Nom:</label>
            <input type="text" name="nom" placeholder="nom">
            <label>Prenom:</label>
            <input type="text" name="prenom" placeholder="prenom">
            <label>Age:</label>
            <input type="text" name="age" placeholder="age">
            <label>Region:</label>
            <input type="text" name="region" placeholder="region">
            <input type="submit">
        </form>
    </body>
</html>
<?php
        ?>

