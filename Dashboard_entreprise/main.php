<?php

$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=bdd;charset=utf8',
    'root',
    ''
);

foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`)  FROM `bdd` GROUP BY `Secteur Activité`;')as $REQUEST)



?>