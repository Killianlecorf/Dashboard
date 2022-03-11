<?php

$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=bdd;charset=utf8',
    'root',
    ''
);

// Ta boucle foreach va s'executer à chaque enregistrement de ta base de données
// le COUNT sera constant par contre
// ajouter "as" dans ta requête te permet de renommer COUNT(`Nom de la structure`) en count_structure pour l'utiliser facilement

//secteur d'activité

foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_structure  FROM `bdd` GROUP BY `Secteur Activité`;')as $REQUEST)
{
    $count = $REQUEST["count_structure"];
};

foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_admin FROM `bdd` WHERE `Secteur Activité`="administration";')as $REQUEST)
{
    $count_admin = $REQUEST["count_admin"];
}

foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_agri  FROM `bdd` WHERE `Secteur Activité`="Agriculture, sylviculture et pêche";')as $REQUEST)
{
    $count_agri = $REQUEST["count_agri"];
}

foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_comm  FROM `bdd` WHERE `Secteur Activité`="commerce";')as $REQUEST)
{
    $count_comm = $REQUEST["count_comm"];
}


foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_cons  FROM `bdd` WHERE `Secteur Activité`="construction";')as $REQUEST)
{
    $count_cons = $REQUEST["count_cons"];
}

foreach( $mysqlConnection ->query('SELECT `Secteur Activité` , COUNT(`Nom de la structure`) as count_indu  FROM `bdd` WHERE `Secteur Activité`="industrie";')as $REQUEST)
{
    $count_indu = $REQUEST["count_indu"];
}

// stage

foreach( $mysqlConnection ->query('SELECT `Nom de la structure` , COUNT(`Stage`) as count_yes FROM `bdd` WHERE `Stage`="oui";')as $REQUEST)
{
    $count_yes = $REQUEST["count_yes"];
}


foreach( $mysqlConnection ->query('SELECT `Nom de la structure` , COUNT(`Stage`) as count_no FROM `bdd` WHERE `Stage`=" ";')as $REQUEST)
{
    $count_no = $REQUEST["count_no"];
}

//  Taille de la structure


foreach( $mysqlConnection ->query('SELECT `Taille de la structure` , COUNT(`Nom de la structure`) as count_tpe FROM `bdd` WHERE `Taille de la structure`="TPE";')as $REQUEST)
{
    $count_tpe = $REQUEST["count_tpe"];
}

foreach( $mysqlConnection ->query('SELECT `Taille de la structure` , COUNT(`Nom de la structure`) as count_pme FROM `bdd` WHERE `Taille de la structure`="PME";')as $REQUEST)
{
    $count_pme = $REQUEST["count_pme"];
}

foreach( $mysqlConnection ->query('SELECT `Taille de la structure` , COUNT(`Nom de la structure`) as count_eti FROM `bdd` WHERE `Taille de la structure`="ETI";')as $REQUEST)
{
    $count_eti = $REQUEST["count_eti"];
}

foreach( $mysqlConnection ->query('SELECT `Taille de la structure` , COUNT(`Nom de la structure`) as count_ge FROM `bdd` WHERE `Taille de la structure`="GE";')as $REQUEST)
{
    $count_ge = $REQUEST["count_ge"];
}
?>