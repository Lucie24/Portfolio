<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Documentation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!--======= Header =======-->
  <div class="header header-top">
    <div class="container">

      <h1><a href="index.php">Lucie DUMAS</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="index.php">Accueil</a></li>
          <li><a class="nav-link" href="index.php#about">Profil</a></li>
          <li><a class="nav-link" href="index.php#resume">Veille technologique</a></li>
          <li><a class="nav-link" href="index.php#stages">Stages</a></li>
          <li><a class="nav-link" href="index.php#services">Documentations</a></li>
          <li><a class="nav-link" href="index.php#certifications">Certifications</a></li>
          <!-- <li><a class="nav-link" href="#contact">Contact</a></li> -->
        </ul>
        <i id="btn-phone" class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </div>

  <main id="main ">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">


        <div class="row">

          <?php
            $id = $_GET["id"];

            switch ($id) {
              case 1:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un réseau informatique</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un réseau constitué d'un serveur et d'un routeur Debian 11.</p>";
                break;
              case 2:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Installation et mise en place de LXC</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un serveur template ainsi qu'un serveur web à l'aide de la solution 
                de conteneurisation LXC. Notre serveur template sera un modèle de conteneurs que nous utiliserons pour créer nos futures machines.</p>";
                break;
              case 3:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Installation et mise en place de LAMP</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous configurerons notre serveur web avec la solution LAMP 
                (Linux-Apache-MariaDB-PHPMyAdmin). Nous manipulerons également la création de bases de données via un script SQLite3.</p>";
                break;
              case 4:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Installation et configuration DNS</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un serveur de noms et nous nous assurerons de sa haute disponibilité à 
                l'aide du couple de DNS Master/Slave.</p>";
                break;
              case 5:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Solution de sauvegarde Rsync/Cron</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place le conteneur Backup, qui stockera les différentes sauvegardes. Nous 
                utiliserons l'outil de sauvegarde Rsync pour sauvegarder le contenu de nos conteneurs via un script. Nous utiliserons également l'outil Cron pour 
                planifier le lancement du script.</p>";
                break;
              case 6:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un serveur FTP</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un serveur de transfert de fichiers et configurerons les utilisateurs
                anonymes ainsi que les Virtual Hosts.</p>";
                break;
              case 7:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place des Virtual Hosts : Apache2</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place des Virtual Hosts afin de pouvoir héberger plusieurs sites internet
                sur le même serveur web, dont un avec un accès limité. Nous metttrons également en place un DokuWiki ainsi que des pages d'erreur personnalisées.</p>";
                break;
              case 8:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Chiffrement des communications HTTP et FTP avec SSL/TLS</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous sécuriserons notre service FTP et nos sites internet en chiffrant nos communications 
                à l'aide du chiffrement SSL/TLS. Nous mettrons donc en place les protocoles FTPS et HTTPS.</p>";
                break;
              case 9:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un pare-feu / filtrage des flux</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un pare-feu afin de filtrer les flux
                entre chaque service. Pour ce faire, un script IPtables devra être créé.</p>";
                break;
              case 10:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un serveur DHCP</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un serveur DHCP afin de pouvoir allouer
                automatiquement ses paramètres IP et DNS.</p>";
                break;
              case 11:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Installation et configuration de Proxmox VE</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous installerons sur notre routeur le système d'exploitation Debian 12.
                  Nous installerons ensuite sur notre serveur le système d'exploitation Proxmox VE permettant de mettre en place 
                  un serveur de virtualisation. Nous créerons également un conteneur template et une machine virtuelle template.</p>";
                break;
              case 12:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Installation de clés GPG et configuration de la commande sudo</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place des clés GPG, puis nous configurerons la commande 
                sudo.</p>";
                break;
              case 13:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Récupération d'une configuration avec Clonezilla</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous créerons une sauvegarde du disque dur de notre serveur à l'aide de l'outil
                Clonezilla. Nous simulerons par la suite un incident sur ce même disque et restaureront la sauvegarde effectuée précédemment.</p>";
                break;
              case 14:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un serveur de sauvegarde</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous mettrons en place un serveur de sauvegarde Backuppc. Nous sauvegarderons ensuite
                toutes les machines virtuelles et simulerons un incident afin de tester la restauration des sauvegardes.</p>";
                break;
              case 15:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Configuration d'un serveur de bases de données</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 16:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Configuration IP automatique de clients</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 17:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>DHCP Failover et Load Balancing</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 18:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un serveur de noms</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 19:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place des applications Web avec Nginx</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 20:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Transfert de fichier / Stockage NAS</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 21:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Chiffrement des communications avec SSL/TLS</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 22:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Mise en place d'un pare-feu OPNsense</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;
              case 23:
                echo 
                "<div class='section-title'>
                  <p class='textCenter'>Supervision de l'infrastructure avec Zabbix</p>
                </div>

                <p class='marginBottom textCenter'>Dans cette mission, nous </p>";
                break;               
            }

            echo '<iframe src="assets/pdf/' . $id . '.pdf" width="500" height="800vmax" allowfullscreen webkitallowfullscreen>';
          ?>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

</body>

</html>