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

//  Statut

foreach( $mysqlConnection ->query('SELECT `Statut_Type de structure` , COUNT(`Nom de la structure`) as count_EP FROM `bdd` WHERE `Statut_Type de structure`="Entreprise privée";')as $REQUEST)
{
    $count_EP = $REQUEST["count_EP"];
}


foreach( $mysqlConnection ->query('SELECT `Statut_Type de structure` , COUNT(`Nom de la structure`) as count_assos FROM `bdd` WHERE `Statut_Type de structure`="Association";')as $REQUEST)
{
    $count_assos = $REQUEST["count_assos"];
}

foreach( $mysqlConnection ->query('SELECT `Statut_Type de structure` , COUNT(`Nom de la structure`) as count_Epu FROM `bdd` WHERE `Statut_Type de structure`="Etablissement public";')as $REQUEST)
{
    $count_Epu = $REQUEST["count_Epu"];
}

foreach( $mysqlConnection ->query('SELECT `Statut_Type de structure` , COUNT(`Nom de la structure`) as count_col FROM `bdd` WHERE `Statut_Type de structure`="Collectivité";')as $REQUEST)
{
    $count_col = $REQUEST["count_col"];
}

foreach( $mysqlConnection ->query('SELECT `Statut_Type de structure` , COUNT(`Nom de la structure`) as count_AP FROM `bdd` WHERE `Statut_Type de structure`="Administration publique";')as $REQUEST)
{
    $count_AP = $REQUEST["count_AP"];
}

foreach( $mysqlConnection ->query('SELECT `Statut_Type de structure` , COUNT(`Nom de la structure`) as count_EF FROM `bdd` WHERE `Statut_Type de structure`="Etablissement fermé";')as $REQUEST)
{
    $count_EF = $REQUEST["count_EF"];
}



// Zone géographique

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_MRN FROM `bdd` WHERE `Zone Géographique` ="Métropole Rouen Normandie (hors Ville de Rouen)";')as $REQUEST)
{
    $count_MRN = $REQUEST["count_MRN"];
}

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_AR FROM `bdd` WHERE `Zone Géographique`="Arrondissement de Rouen (hors Métropole)";')as $REQUEST)
{
    $count_AR = $REQUEST["count_AR"];
}

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_rouen FROM `bdd` WHERE `Zone Géographique`="Rouen";')as $REQUEST)
{
    $count_rouen = $REQUEST["count_rouen"];
}

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_eure FROM `bdd` WHERE `Zone Géographique`="Eure";')as $REQUEST)
{
    $count_eure = $REQUEST["count_eure"];
}

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_HN FROM `bdd` WHERE `Zone Géographique`="Hors Normandie";')as $REQUEST)
{
    $count_HN = $REQUEST["count_HN"];
}

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_norm FROM `bdd` WHERE `Zone Géographique`="Normandie (hors 27 et 76)";')as $REQUEST)
{
    $count_norm = $REQUEST["count_norm"];
}

foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_hav FROM `bdd` WHERE `Zone Géographique`="Arrondissement du Havre";')as $REQUEST)
{
    $count_hav = $REQUEST["count_hav"];
}


foreach( $mysqlConnection ->query('SELECT `Zone Géographique` , COUNT(`Nom de la structure`) as count_die FROM `bdd` WHERE `Zone Géographique`="Arrondissement de Dieppe";')as $REQUEST)
{
    $count_die = $REQUEST["count_die"];
}


?>