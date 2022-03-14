<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <?php 
        include ('main.php');
    ?>
    <section class="header-content">
        <div class="title">   
                <img class="img-logo" src="img/R (9).png" alt="">
                <h1>Dashboard</h1>
        </div>
        <div class="header-link">
            <ul class="list-link">
                <li>
                    <a class="link" href=""><strong>Home</strong></a>
                </li>
                <li>
                    <a class="link" href=""><strong>Documentation</strong></a>
                </li>
            </ul>
        </div>
        <div class="profil-content">
            <img class="img-compte" src="img/R.png" alt="">
            <a class="profil" href="#">Compte</a>
        </div>
    </section>
    <section class="body-content">
        <section class="nav">
            <div class="nav-area">
                <div class="main-nav">
                    <h2>Menu navigation</h2>
                </div>
            </div>
            <div class="nav-content">
                <nav>
                    <ul>
                        <li class="nav-list">
                            <a href="index.php">Secteur d'activité</a>
                        </li>
                        <li class="nav-list">
                            <a href="TDLS.php">Taille de la structure</a>
                        </li>
                        <li class="nav-list">
                            <a href="stage.php">Stage</a>
                        </li>
                        <li class="nav-list">
                            <a href="statut.php">Statut de l'entreprise</a>
                        </li>
                        <li class="nav-list">
                            <a href="ZG.php">Zone géographique</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="dash-content">
            <div class="back-grey">
                <div class="body-SA">
                    <img class="home" src="img/home.png" alt="">
                    <p class="menu-text">Statut de l'entreprise</p>
                </div>
            </div>
            <div class="diagram-contenair">
            <div class="title-contenair">
                    <div class="title-content">
                    <p>Entreprise privé</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_EP;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>Association</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_assos;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>Entreprise publique</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_Epu;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>collectivité</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_col;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>Admin. publique</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_AP;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>Etab. fermé</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_EF;                        
                            ?>
                    </div>
                </div>
            </div>
            <div class='diagram-content'>
            <canvas id="myChart" style="width:100%;max-width:750px"></canvas>

            <script>
            var xValues = ['Etablissement privé' , 'Association' , 'Entreprise publique' , 'Collectivité' , 'Administration publique' , 'Etablissement fermé'  ];
            var yValues =
            [
                <?php
                    echo "$count_EP,";
                    echo "$count_assos," ;
                    echo "$count_Epu," ;
                    echo "$count_col,";
                    echo "$count_AP,";
                    echo "$count_EF";
                ?>
            ];
            var barColors = [
            "#b91d47",
            "#1e7145",
            "#2b5797",
            "#e8c3b9",
            "#00aba9",
            "blue"
            ];

            new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets:  [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Secteur d'activité des entreprises "
                }
            }
            });
            </script>         
            </div>
        </section>
</section>
</body>
</html>