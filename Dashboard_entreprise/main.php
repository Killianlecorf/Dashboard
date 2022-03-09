<?php

$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=bdd;charset=utf8',
    'root',
    ''
);

// Ta boucle foreach va s'executer à chaque enregistrement de ta base de données
// le COUNT sera constant par contre
// ajouter "as" dans ta requête te permet de renommer COUNT(`Nom de la structure`) en count_structure pour l'utiliser facilement
foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_structure  FROM `bdd` GROUP BY `Secteur Activité`;')as $REQUEST)
{
    $count = $REQUEST["count_structure"];
}



?>