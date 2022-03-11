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
                            <a href="Activit%C3%A9.php">Activité</a>
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
                    <p class="menu-text">Taille de la structure</p>
                </div>
            </div>
            <div class="diagram-contenair">
            <div class="title-contenair">
                    <div class="title-content">
                    <p>TPE</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_tpe;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>PME</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_pme;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>ETI</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_eti;                        
                            ?>
                    </div>
                </div>
                <div class="title-contenair">
                    <div class="title-content">
                    <p>GE</p>
                    </div>
                    <div class="data-one">
                        <?php
                                echo $count_ge;                        
                            ?>
                    </div>
                </div>
                
            </div>
            <div>
                <div class='diagram-content'>
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

            <script>
            var xValues = ["TPE", "PME", "ETI", "GE"];
            var yValues = [
                <?php
                    echo "$count_tpe,";
                    echo "$count_pme," ;
                    echo "$count_eti," ;
                    echo "$count_ge";
                ?>
            ];
            var barColors = [
            "#b91d47",
            "#1e7145",
            "#2b5797",
            "#e8c3b9",
            ];

            new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Taille de la structure"
                }
            }
            });
            </script>         
            </div>
        </div> 
        </section>
</section>
</body>
</html>