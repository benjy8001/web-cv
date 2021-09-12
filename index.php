<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Benjamin Mabille - Developpeur Full Stack</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="robots" content="index,follow,all">
  <meta name="robots" content="INDEX|FOLLOW">
  <meta name="keywords" content=""/>
  <meta name="description" content="" />
  <meta name="Author" content="Benjamin Mabille">
  <link type="text/plain" rel="author" href="humans.txt" />
  <!-- Favicons-->
  <link rel="icon" href="assets/img/dev.ico" sizes="32x32">

  <!-- Google Icon Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <!-- Font Awesome -->
  <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <!-- Materialize -->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen" />
  <!-- Materialize Theme -->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize-theme.css" />
  <!-- mCustomScrollbar -->
  <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" />
  <!-- Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
  <!-- Styles -->
  <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
  <!-- Responsive -->
  <link type="text/css" rel="stylesheet" href="assets/css/responsive.css" />
  <!-- Theme -->
  <link type="text/css" rel="stylesheet" href="assets/themes/color8/color-style/color.css" id="switch_style" />
  <noscript>Your browser does not support JavaScript!</noscript>
</head>

<body id="page-top" class="scrollspy">
  <div class="wrapper">
    <!-- Right Column -->
    <div class="right-column">
      <!-- Header -->
      <header class="dark-bg">
        <ul class="social-links">
          <li>
            <a href="https://www.facebook.com/benjamin.mabille" class="tooltipped" data-position="bottom" data-delay="20" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
          </li>
          <!--
          <li>
            <a href="#" class="tooltipped" data-position="bottom" data-delay="20" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#" class="tooltipped" data-position="bottom" data-delay="20" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
          </li>
          <li>
            <a href="#" class="tooltipped" data-position="bottom" data-delay="20" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
          </li>
        -->
        <li>
          <a href="https://www.linkedin.com/in/benjamin-mabille-b4033154/" class="tooltipped" data-position="bottom" data-delay="20" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
        </li>
      </ul>
      <div class="user_name-title">
        <h2>BENJAMIN MABILLE</h2>
        <p>Developpeur Full Stack</p>
      </div>
    </header>
    <!-- # Header End # -->
    <!-- Personal Information -->
    <div class="user-wrapper">
      <!-- Profile Image -->
      <div class="profile-image"> <img src="images/developpement-web.jpg" alt="BENJAMIN MABILLE" class="responsive-img"> </div>
      <!-- # Profile Image End # -->
      <div class="user-content">
        <ul class="collection">
          <li class="collection-item">
            <span class="bolder">A l'ecoute d'opportunité</span>
            <div class="switch right">
              <label>
                <input disabled type="checkbox" checked>
                <span class="lever"></span>ON</label>
              </div>
            </li>
            <li class="collection-item">
              <span class="bolder">Bonjour, je suis Benjamin Mabille!</span>
              <br>
              <br> Je suis actuellement en poste en tant que Consultant Sénior. Mes différentes missions mon apportés une expérience certaine au niveau des CI/CD, du respect des PSR, de la rédaction de SFD/STD et du chiffrage de tâches.
                <br></li>
              <li class="collection-item">
                <a href="CV/BMA_CV_2018.pdf" target="_blank" class="btn waves-effect waves-light dark-bg">MON CV<i class="material-icons">file_download</i></a>
                <a href="#contact" class="btn waves-effect waves-light light-bg">ME CONTACTER!<i class="material-icons">email</i></a>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- # Personal Information End # -->
      </div>
      <!-- # Right Column End # -->
      <!-- Left Column -->
      <div class="left-column">
        <header id="header">
          <!-- Navigation -->
          <div id="navbar" class="navbar-fixed">
            <nav class="main-navigation light-bg">
              <div class="nav-wrapper">
                <ul>
                  <li>
                    <a href="#page-top" class="waves-effect">Accueil</a>
                  </li>
                  <li>
                    <a href="#diplomes" class="waves-effect">Diplômes</a>
                  </li>
                  <li>
                    <a href="#works" class="waves-effect">Expérience Professionnelle</a>
                  </li>
                  <li>
                    <a href="#skills" class="waves-effect">Savoir faire</a>
                  </li>
                  <li>
                    <a href="#services" class="waves-effect">Savoir être</a>
                  </li>
                  <li>
                    <a href="#portfolio" class="waves-effect">Portfolio</a>
                  </li>
                  <li>
                    <a href="#references" class="waves-effect">References</a>
                  </li>
                  <li>
                    <a href="#contact" class="waves-effect">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <!-- # Navigation End # -->
          <!-- Mobile Navigation -->
          <div class="fixed-action-btn vertical click-to-toggle mobile-menu">
            <a class="btn btn-floating btn-large light-bg"> <i class="large mdi-navigation-menu"></i> </a>
            <ul>
              <li>
                <a class="btn-floating" href="#page-top"><i class="material-icons">home</i></a>
              </li>
              <li>
                <a class="btn-floating white" href="#diplomes"><i class="material-icons cyan-text text-darken-2">account_balance</i></a>
              </li>
              <li>
                <a class="btn-floating light-green darken-3" href="#works"><i class="material-icons">work</i></a>
              </li>
              <li>
                <a class="btn-floating deep-orange accent-3" href="#skills"><i class="material-icons">assessment</i></a>
              </li>
              <li>
                <a class="btn-floating deep-purple darken-3" href="#services"><i class="material-icons">important_devices</i></a>
              </li>
              <li>
                <a class="btn-floating light-green darken-3" href="#portfolio"><i class="material-icons">queue_play_next</i></a>
              </li>
              <li>
                <a class="btn-floating cyan darken-4" href="#price"><i class="material-icons">format_list_bulleted</i></a>
              </li>
              <li>
                <a class="btn-floating deep-orange accent-3" href="#references"><i class="material-icons">assignment_ind</i></a>
              </li>
              <li>
                <a class="btn-floating lime darken-2" href="#contact"><i class="material-icons">mail_outline</i></a>
              </li>
            </ul>
          </div>
          <!-- # Mobile Navigation End # -->
          <!-- Header Content -->
          <div class="light-bg header-wrap">
            <div class="header-content">
              <h1>Je suis <strong>Benjamin Mabille</strong> |</h1>
              <span class="sub-text">Developpeur <strong>passionné</strong>, <strong>11 ans</strong> d'expérience.</span>
            </div>
          </div>
          <!-- # Header Content End # -->
        </header>
        <?PHP
        $token                = isset($_POST["token"]) ? $_POST["token"] : '';
        $_process          = isset($_POST["_process"]) ? $_POST["_process"] : '';


                              //Pb de session sur certains navigateurs (ex : Chrome avec Firebug d'actif)
        $tokenConnexionSess = (isset($_SESSION["CVBMA_tokenConnexion"]) ? $_SESSION["CVBMA_tokenConnexion"] : '');
                //var_dump($_POST);

                //echo "$tokenConnexionSess == $token";

        if( $_process == 'sendmail' )
        {
          if($tokenConnexionSess == $token)
          {
            $name_surname = isset($_POST["name_surname"]) ? $_POST["name_surname"] : '';
            $email = isset($_POST["email"]) ? $_POST["email"] : '';
            $subject = isset($_POST["subject"]) ? $_POST["subject"] : '';
            $message = isset($_POST["message"]) ? $_POST["message"] : '';
            $to      = 'benjy80@gmail.com';
            $message = "Message de $name_surname\n\r" . "Email : $email\n\r". $message;
            $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            $retour = @mail($to, $subject, $message, $headers);

                    //var_dump($retour);
            file_put_contents('log_contact.log', date("Y-m-d H:i:s") . " - $to, $subject, $message, $headers\n\r*******************************\n\r", FILE_APPEND)

            ?>
            <section style="margin-bottom: 30px;">
              <div class="row">
                <div class="col l12">
                  <div id="card-alert" class="card green">
                    <div class="card-content white-text">
                      <p><i class="mdi-navigation-check"></i> Merci! Votre message à bien été envoyé.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </section>
            <?PHP
          }
          else
          {
            $erreur_acces = true;
            $tokenConnexion                               = md5(microtime());
            $_SESSION["CVBMA_tokenConnexion"]   = $tokenConnexion;
          }
        }


        if(!isset($tokenConnexion) || empty($tokenConnexionSess))
        {
          $tokenConnexion                       = md5(microtime());
          $_SESSION["CVBMA_tokenConnexion"]   = $tokenConnexion;
        }
        ?>
        <!-- Diplomes -->
        <section id="diplomes" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large white"><i class="material-icons cyan-text text-darken-2">account_balance</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="cyan-text text-darken-2">Diplômes</h2>
          <!-- # Title End # -->
          <!-- Table -->
          <table class="highlight section-table">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th>Diplôme</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col1"><img src="images/Education/Education_Building_2.png" alt="IUT de Calais (62)" class="circle"></td>
                <td class="col2">IUT de Calais (62)</td>
                <td class="col3">Licence Pro RSC, Exploitation Réseau - Mention Bien</td>
                <td class="col4">2006 - 2007</td>
              </tr>
              <tr>
                <td class="col1"><img src="images/Education/Education_Building_2.png" alt="IUT de Calais (62)" class="circle"></td>
                <td class="col2">IUT de Calais (62)</td>
                <td class="col3">DUT Informatique, Imagerie Numérique</td>
                <td class="col4">2004 - 2006</td>
              </tr>
              <tr>
                <td class="col1"><img src="images/Education/Education_Building_1.png" alt="Lycée du Vimeu" class="circle"></td>
                <td class="col2">Lycée du Vimeu</td>
                <td class="col3">BAC STI Electrotechnique - Mention Bien</td>
                <td class="col4">2004</td>
              </tr>
            </tbody>
          </table>
          <!-- #  Table End # -->
        </section>
        <!-- # Education End # -->
        <!-- Works -->
        <section id="works" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large light-green darken-3"><i class="material-icons">work</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="light-green-text text-darken-3">Expérience Professionnelle</h2>
          <!-- # Title End # -->
          <!-- Table -->
          <table class="highlight section-table">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th>Entreprise</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col1"><img src="images/Works/Company_Logo_5.png" alt="Consultant Séniore" class="circle"></td>
                    <td class="col2"><b>Consultant Sénior</b>
                    </td>
                    <td class="col3">
                        <span class="light-green-text text-darken-3">Business&Decision</span> / Amiens (80)
                    </td>
                    <td class="col4">Depuis Sept. 2018</td>
                </tr>
              <tr>
                  <td class="col1"><img src="images/Works/Company_Logo_4.png" alt="Developpeur" class="circle"></td>
                  <td class="col2"><b>Developpeur</b>
                  <br> Maintien, et l'évolution de l'interface Web de pilotage d'une solution de backup (Laravel, NodeJS, Redis, InfluxDB)
                  <br> Participation à l'élaboration de la core-tech (solution de backup décentralisée basée sur le réseau P2P) (Python, Redis, libtorrent).</td>
                  <td class="col3">
                      <span class="light-green-text text-darken-3">Ugloo</span> / Amiens (80)
                  </td>
                  <td class="col4">2017 - 2018</td>
              </tr>
              <tr>
                <td class="col1"><img src="images/Works/Company_Logo_3.png" alt="Developpeur Full Stack" class="circle"></td>
                <td class="col2"><b>Developpeur Full Stack</b>
                <br> Assurer le maintien, la création et l'évolution des outils internes ; ainsi que la création de site web et de progiciels.</td>
                <td class="col3">
                  <span class="light-green-text text-darken-3">Plug-It</span> / Ailly-Sur-Noye (80)
                </td>
                <td class="col4">2014 - 2017</td>
              </tr>
              <tr>
                <td class="col1"><img src="images/Works/Company_Logo_2.png" alt="Guupzi" class="circle"></td>
                <td class="col2"><b>Administrateur BDD</b></td>
                <td class="col3">
                  <span class="light-green-text text-darken-3">CCA International</span> / Amiens (80)
                </td>
                <td class="col4">2010 - 2014</td>
              </tr>
              <tr>
                <td class="col1"><img src="images/Works/Company_Logo_1.png" alt="Intracall Center" class="circle"></td>
                <td class="col2"><b>Developpeur LAMP</b>
                <br> Créer des applications Intranet / Extranet en interaction avec un système de composition téléphonique, et répondant à un cahier des charges.</td>
                <td class="col3">
                  <span class="light-green-text text-darken-3">Intracall Center</span> / Amiens (80)
                </td>
                <td class="col4">2008 - 2010</td>
              </tr>
            </tbody>
            <!-- # Table End # -->
          </table>
        </section>
        <!-- #  Works End # -->
        <!-- Professional Skills -->
        <section id="skills" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large deep-orange accent-3"><i class="material-icons">assessment</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="deep-orange-text text-accent-3">Savoir Faire</h2>
          <!-- # Title End # -->
          <div class="skills">
              <!-- Skill Item -->
              <div class="skill-item"> <img src="images/Skills/Skill_Logo_1.png" class="circle" alt="Git Lab CI/CD">
                  <div class="title_value">Git Lab CI/CD
                      <span class="value">75%</span>
                  </div>
                  <div class="progress">
                      <div class="determinate pink darken-4" style="width: 75%;"></div>
                  </div>
              </div>
              <!-- # Skill Item End # -->
              <!-- Skill Item -->
              <div class="skill-item"> <img src="images/Skills/Skill_Logo_1.png" class="circle" alt="Symfony 2.8">
                  <div class="title_value">Symfony 2.8
                      <span class="value">65%</span>
                  </div>
                  <div class="progress">
                      <div class="determinate pink darken-4" style="width: 65%;"></div>
                  </div>
              </div>
              <!-- # Skill Item End # -->
              <!-- Skill Item -->
              <div class="skill-item"> <img src="images/Skills/Skill_Logo_1.png" class="circle" alt="Symfony 4.3">
                  <div class="title_value">Symfony 4.3
                      <span class="value">85%</span>
                  </div>
                  <div class="progress">
                      <div class="determinate pink darken-4" style="width: 85%;"></div>
                  </div>
              </div>
              <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_1.png" class="circle" alt="PHP">
              <div class="title_value">PHP (5 / 7.2)
                <span class="value">95%</span>
              </div>
              <div class="progress">
                <div class="determinate pink darken-4" style="width: 95%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_2.png" class="circle" alt="MySQL">
              <div class="title_value">MySQL
                <span class="value">95%</span>
              </div>
              <div class="progress">
                <div class="determinate blue darken-3" style="width: 95%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_3.png" class="circle" alt="GIT">
              <div class="title_value">GIT
                <span class="value">90%</span>
              </div>
              <div class="progress">
                <div class="determinate amber darken-4" style="width: 90%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_4.png" class="circle" alt="Linux">
              <div class="title_value">Linux
                <span class="value">90%</span>
              </div>
              <div class="progress">
                <div class="determinate red darken-4" style="width: 90%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_5.png" class="circle" alt="QT5">
              <div class="title_value">QT5
                <span class="value">65%</span>
              </div>
              <div class="progress">
                <div class="determinate brown darken-4" style="width: 65%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_6.png" class="circle" alt="Concrete 5">
              <div class="title_value">Concrete 5
                <span class="value">70%</span>
              </div>
              <div class="progress">
                <div class="determinate teal darken-4" style="width: 70%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_7.png" class="circle" alt="Cordova">
              <div class="title_value">Cordova
                <span class="value">75%</span>
              </div>
              <div class="progress">
                <div class="determinate indigo darken-4" style="width: 75%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
            <!-- Skill Item -->
            <div class="skill-item"> <img src="images/Skills/Skill_Logo_8.png" class="circle" alt="Laravel 5.4">
              <div class="title_value">Laravel 5.4
                <span class="value">60%</span>
              </div>
              <div class="progress">
                <div class="determinate lime darken-4" style="width: 60%;"></div>
              </div>
            </div>
            <!-- # Skill Item End # -->
              <!-- Skill Item -->
              <div class="skill-item"> <img src="images/Skills/Skill_Logo_9.png" class="circle" alt="Python">
                  <div class="title_value">Python
                      <span class="value">65%</span>
                  </div>
                  <div class="progress">
                      <div class="determinate pink darken-4" style="width: 65%;"></div>
                  </div>
              </div>
              <!-- # Skill Item End # -->
              <!-- Skill Item -->
              <div class="skill-item"> <img src="images/Skills/Skill_Logo_10.png" class="circle" alt="Docker">
                  <div class="title_value">Docker
                      <span class="value">75%</span>
                  </div>
                  <div class="progress">
                      <div class="determinate purple darken-4" style="width: 75%;"></div>
                  </div>
              </div>
              <!-- # Skill Item End # -->
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- # Professional Skills End # -->
        <!-- Services -->
        <section id="services" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large deep-purple darken-3"><i class="material-icons">important_devices</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="deep-purple-text text-darken-3">Savoir être</h2>
          <!-- # Title End # -->
          <div id="Services_Carousel" class="owl-carousel">
            <!-- Service Item -->
            <div class="item service-item">
              <span class="icon"><i class="material-icons deep-purple darken-3">web</i></span>
              <h6>Autodidacte</h6>
              <span class="sep deep-purple darken-3"></span>
              <p>Mise à niveau réguliére sur les frameworks et technologies du moment (Bootstrap, Material Design, Redis, DHT, Solidity, ...).</p>
            </div>
            <!-- # Service Item End # -->
            <!-- Service Item -->
            <div class="item service-item">
              <span class="icon"><i class="material-icons pink darken-3">supervisor_account</i></span>
              <h6>Travail en équipe</h6>
              <span class="sep pink darken-3"></span>
              <p>Partage de connaissances, et bonne ambiance sont mes mots d'ordre.</p>
            </div>
            <!-- # Service Item End # -->
            <!-- Service Item -->
            <div class="item service-item">
              <span class="icon"><i class="material-icons deep-orange accent-3">star</i></span>
              <h6>Polyvalent</h6>
              <span class="sep deep-orange accent-3"></span>
              <p>Ma formation initiale dans le réseau, et mon expérience de developpeur font que je suis capable de m'adapter à plusieurs type de projets.</p>
            </div>
            <!-- # Service Item End # -->
          </div>
        </section>
        <!-- # Services End # -->
        <!-- Portfolio -->
        <section id="portfolio" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large light-green darken-3"><i class="material-icons">queue_play_next</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="light-green-text text-darken-3">Portfolio</h2>
          <!-- # Title End # -->
          <div id="Portfolio_Carousel" class="owl-carousel">
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_up2p" class="modal-trigger">
                <h6 class="portfolio-name">Logiciel de sauvegarde décentralisé (P2P)</h6>
                <img src="images/Portfolio/realisations_web/up2p.png" class="responsive-img" alt="Sauvegarde décentralisé (P2P)">
                <span class="portfolio-categories">Technologies,<br>
                  <span class="light-green-text text-darken-3">Python 3.4, Libtorrent, Fuse, Redis, InfluxDb</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_umanager" class="modal-trigger">
                <h6 class="portfolio-name">Interface de gestion de sauvegarde</h6>
                <img src="images/Portfolio/realisations_web/umanager.png" class="responsive-img" alt="Gestion de sauvegarde">
                <span class="portfolio-categories">Technologies,<br>
                  <span class="light-green-text text-darken-3">Laravel 5.4, VueJS, Ajax, PHP 7, Postgresql, Redis, InfluxDb</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_rotostock" class="modal-trigger">
                <h6 class="portfolio-name">Gestion de stock.</h6>
                <img src="images/Portfolio/realisations_web/rotostock1.jpg" class="responsive-img" alt="Gestion de stock">
                <span class="portfolio-categories">Technologies,<br>
                  <span class="light-green-text text-darken-3">Laravel 5.4, Materializecss, Ajax, PHP 7, MySQL 5.7</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_suiviactivite" class="modal-trigger">
                <h6 class="portfolio-name">App de Suivi Activité</h6>
                <img src="images/Portfolio/realisations_web/suivi_activite_1.png" class="responsive-img" alt="App de Suivi Activité">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Cordova, Ajax, PHP, HTML</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_bat" class="modal-trigger">
                <h6 class="portfolio-name">Gestion de B.A.T.</h6>
                <img src="images/Portfolio/realisations_web/roto2.jpg" class="responsive-img" alt="Gestion de B.A.T.">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Materializecss, Ajax, PHP, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_ofre" class="modal-trigger">
                <h6 class="portfolio-name">Gestion de plannings</h6>
                <img src="images/Portfolio/realisations_web/ofre-formation.png" class="responsive-img" alt="Gestion de plannings">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Bootstrap, PHP, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_gestparc" class="modal-trigger">
                <h6 class="portfolio-name">Gestion de parc automobile</h6>
                <img src="images/Portfolio/realisations_web/gestparc.png" class="responsive-img" alt="Gestion dde parc automobile">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Bootstrap, PHP, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_docamsam" class="modal-trigger">
                <h6 class="portfolio-name">Espace documentaire</h6>
                <img src="images/Portfolio/realisations_web/documentation_amsam.jpg" class="responsive-img" alt="AMSAM">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_aestheticgroup" class="modal-trigger">
                <h6 class="portfolio-name">Site Web Aesthetic Group</h6>
                <img src="images/Portfolio/realisations_web/aesthetic.jpeg" class="responsive-img" alt="Aesthetic Group">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Prestashop</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_filebox" class="modal-trigger">
                <h6 class="portfolio-name">Files Box personnalisées</h6>
                <img src="images/Portfolio/realisations_web/touquetbox.png" class="responsive-img" alt="Touquet Box">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">jQuery, Ajax, PHP, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_tervia" class="modal-trigger">
                <h6 class="portfolio-name">Site Web Tervia</h6>
                <img src="images/Portfolio/realisations_web/tervia1.jpg" class="responsive-img" alt="Site Web Tervia">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_marcelhartmann" class="modal-trigger">
                <h6 class="portfolio-name">Site Web Photographies</h6>
                <img src="images/Portfolio/realisations_web/marcel_hartmann_2.png" class="responsive-img" alt="Marcel Hartmann">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">CSS, PHP, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_latangente" class="modal-trigger">
                <h6 class="portfolio-name">Site Web La Tangente</h6>
                <img src="images/Portfolio/realisations_web/latangente.jpg" class="responsive-img" alt="La Tangente">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_phileasjv" class="modal-trigger">
                <h6 class="portfolio-name">Site Web Phileas JV</h6>
                <img src="images/Portfolio/realisations_web/phileas-jv.jpg" class="responsive-img" alt="Phileas JV">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_spta" class="modal-trigger">
                <h6 class="portfolio-name">Site Web SPTA</h6>
                <img src="images/Portfolio/realisations_web/spta.jpg" class="responsive-img" alt="SPTA">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_ecab80" class="modal-trigger">
                <h6 class="portfolio-name">Site Web ECAB80</h6>
                <img src="images/Portfolio/realisations_web/ecab80.jpg" class="responsive-img" alt="Ecab80">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_leflightcase" class="modal-trigger">
                <h6 class="portfolio-name">Site Web Le Flight Case</h6>
                <img src="images/Portfolio/realisations_web/leflightcase.jpg" class="responsive-img" alt="Le flight case">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_picabou" class="modal-trigger">
                <h6 class="portfolio-name">Site Web Picabou</h6>
                <img src="images/Portfolio/realisations_web/picabou.jpg" class="responsive-img" alt="Picabou">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Concrete5</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_exgtransfert" class="modal-trigger">
                <h6 class="portfolio-name">Service EXG-Transfert</h6>
                <img src="images/Portfolio/realisations_web/screen_exg.jpg" class="responsive-img" alt="EXG-Transfert">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Bootstrap, Ajax, PHP, MySQL, Soap</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_gmcc" class="modal-trigger">
                <h6 class="portfolio-name">GMCC</h6>
                <img src="images/Portfolio/realisations_web/e07fa5f0-e54e-11e2-9efe-22000a91e9a7-large.jpg" class="responsive-img" alt="GMCC">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">HTML, CSS, PHP, jQuery, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_monitoring" class="modal-trigger">
                <h6 class="portfolio-name">Outil de monitoring</h6>
                <img src="images/Portfolio/realisations_web/4e70918c-e54f-11e2-a77d-22000aa5129e-large.jpg" class="responsive-img" alt="Outil de monitoring">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">HTML, CSS, PHP, jQuery, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_extranetclient" class="modal-trigger">
                <h6 class="portfolio-name">Extranet Client</h6>
                <img src="images/Portfolio/realisations_web/861a0b22-e545-11e2-ada0-22000aa5108a-large.jpg" class="responsive-img" alt="Extranet Client">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">Bootstrap, PHP, jQuery, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
            <!-- Portfolio Item -->
            <div class="item portfolio-item">
              <a href="#Portfolio_Detail_odi" class="modal-trigger">
                <h6 class="portfolio-name">Outil de Diffusion d'Informations</h6>
                <img src="images/Portfolio/realisations_web/2cfbfae6-e54f-11e2-a77d-22000aa5129e-large.jpg" class="responsive-img" alt="Outil de Diffusion d'Informations">
                <span class="portfolio-categories">Technologies,
                  <span class="light-green-text text-darken-3">HTML, CSS, PHP, jQuery, MySQL</span>
                </span>
              </a>
            </div>
            <!-- # Portfolio Item End # -->
          </div>
        </section>
        <!-- # Portfolio End # -->

        <!-- References -->
        <section id="references" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large deep-orange accent-3"><i class="material-icons">assignment_ind</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="deep-orange-text text-accent-3">References</h2>
          <!-- # Title End # -->
          <div id="References_Carousel" class="owl-carousel">
            <!-- Reference Item -->
            <div class="item reference-item"> <img src="images/References/Reference_Logo_6.png" class="responsive-img grayscale" alt="Python"> </div>
            <!-- # Reference Item End # -->
            <!-- Reference Item -->
            <div class="item reference-item"> <img src="images/References/Reference_Logo_4.png" class="responsive-img grayscale" alt="Materializecss"> </div>
            <!-- # Reference Item End # -->
            <!-- Reference Item -->
            <div class="item reference-item"> <img src="images/References/Reference_Logo_5.png" class="responsive-img grayscale" alt="Bootstrap Twitter"> </div>
            <!-- # Reference Item End # -->
            <!-- Reference Item -->
            <div class="item reference-item"> <img src="images/References/Reference_Logo_3.png" class="responsive-img grayscale" alt="jQuery"> </div>
            <!-- # Reference Item End # -->
            <!-- Reference Item -->
            <div class="item reference-item"> <img src="images/References/Reference_Logo_1.png" class="responsive-img grayscale" alt="HTML5"> </div>
            <!-- # Reference Item End # -->
            <!-- Reference Item -->
            <div class="item reference-item"> <img src="images/References/Reference_Logo_2.png" class="responsive-img grayscale" alt="CSS3"> </div>
            <!-- # Reference Item End # -->
          </div>
        </section>
        <!-- # References End # -->
        <!-- Contact Me -->
        <section id="contact" class="section scrollspy">
          <!-- Icon -->
          <span class="icon btn-floating btn-large lime darken-2"><i class="material-icons">mail_outline</i></span>
          <!-- # Icon End # -->
          <!-- Title -->
          <h2 class="lime-text text-darken-2">Me contacter</h2>
          <!-- # Title End # -->
          <!-- Contact Information -->
          <div class="contact-information">
            <div class="row">
              <!-- Mail -->
              <div class="col s6 l3">
                <div class="icon"><i class="material-icons">email</i></div>
                <p>benjy80 [at] gmail.com</p>
              </div>
              <!-- # Mail End # -->
              <!-- Mobile -->
              <div class="col s6 l3">
                <div class="icon"><i class="material-icons">phone_iphone</i></div>
                <p>06 14 63 61 41</p>
              </div>
              <!-- # Mobile End # -->
              <!-- Skype -->
              <div class="col s6 l3">
                <div class="icon"><i class="fa fa-skype"></i></div>
                <p>Skype / b.mabille</p>
              </div>
              <!-- # Skype End # -->
              <!-- Location -->
              <div class="col s6 l3">
                <div class="icon"><i class="material-icons">location_on</i></div>
                <p>18 rue Principale
                  <br> 80110 AUBERCOURT</p>
                </div>
                <!-- # Location End # -->
                <div class="clearfix"></div>
              </div>
            </div>
            <!-- # Contact Information End # -->
          </section>
          <div class="section contact-form">
            <div class="row">
              <div class="col s12 m6 l6 contact-text">Un renseignement ?
                <br>
                <br> Je suis à votre écoute.</div>
                <div class="col s12 m6 l6">
                  <form action="" method="post">
                   <input type="hidden" name="_process" id="_process" value="sendmail" />
                   <input type="hidden" name="token" id="token" value="<?PHP echo $tokenConnexion; ?>" />
                   <div class="input-field">
                    <input id="name_surname" name="name_surname" type="text" class="validate">
                    <label for="name_surname">Nom</label>
                  </div>
                  <div class="input-field">
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">E-mail</label>
                  </div>
                  <div class="input-field">
                    <input id="subject" name="subject" type="text" class="validate">
                    <label for="subject">Sujet</label>
                  </div>
                  <div class="input-field">
                    <textarea id="message" name="message" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
                  </div>
                  <input type="submit" class="btn dark-bg waves-effect" value="ENVOYER">
                </form>
              </div>
            </div>
          </div>
          <!-- # Contact Me End # -->
          <!-- Footer -->
          <footer id="footer">
            <div class="copyright">
              <div class="row">
                <div class="col s12 m6 l6 left light-bg">www.benjamin-mabille.fr
                  <br> 2017 - Copyright</div>
                  <div class="col s12 m6 l6 right dark-bg">Me contacter!
                    <br> benjy80 [at] gmail.com
                  </div>
                </div>
              </div>
            </footer>
            <!-- # Footer End # -->
          </div>
          <!-- # Left Column End # -->
        </div>
        <!-- Loader -->
        <div class="page-loading">
          <div class="preloader-wrapper big active">
            <div class="spinner-layer border-color">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="gap-patch">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- # Loader End -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_up2p" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Logiciel de sauvegarde décentralisé via P2P</h4>
            <img src="images/Portfolio/realisations_web/up2p.png" class="responsive-img" alt="P2P">
            <hr>
            <p>Elaboration de la core-tech (solution de backup décentralisée basée sur le réseau P2P).</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_umanager" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Interface de gestion de sauvegarde</h4>
            <img src="images/Portfolio/realisations_web/umanager2.png" class="responsive-img" alt="Interface de gestion de sauvegarde">
            <hr>
            <p>Interface Web de pilotage d'une solution de backup.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_bat" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Outil de Bon à tirer en ligne</h4>
            <img src="images/Portfolio/realisations_web/roto2.jpg" class="responsive-img" alt="Outil de Bon à tirer en ligne">
            <hr>
            <p>Outil intégrant automatiquement des editions à imprimer (déposés sur un FTP, detectés avec Inotify). Les clients ont la possibilité de valider ou refus chaque page ; un compte rendu est ensuite envoyé par mail pour lancer l'impression.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="https://webextranet.rotopicardie.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_rotostock" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Outil de Gestion de stock</h4>
            <img src="images/Portfolio/realisations_web/rotostock2.jpg" class="responsive-img" alt="Outil de Gestion de stock">
            <hr>
            <p>Outil de suivi du stock. Saisie rapide avec systeme de douchette ; Eport Excel de l'etat du stock et de la consommation sur une période.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_suiviactivite" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">App Suivi Activité</h4>
            <img src="images/Portfolio/realisations_web/suivi_activite_2.png" class="responsive-img" alt="App Suivi Activité">
            <hr>
            <p>Application mobile permettant aux salariés de renseigner leur activité quotidienne, et le temps passé auprès des clients.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="https://webextranet.rotopicardie.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_ofre" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Outil de Gestion de Planning de formation</h4>
            <img src="images/Portfolio/realisations_web/ofre-formation-2.png.jpg" class="responsive-img" alt="Outil de Gestion de Planning de formation">
            <hr>
            <p>Outil permettant de gérer des formations et plannings associés.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="https://www.ofre-formation.com/plannings/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_gestparc" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Outil de Gestion de Parc automobile</h4>
            <img src="images/Portfolio/realisations_web/gestparc-2.jpg" class="responsive-img" alt="Outil de Gestion de Parc automobile">
            <hr>
            <p>Outil permettant de gérer des un parc automobile, les problémes d'equipement, les accidents et révisions à planifier.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://gestparcspta.plug-it.com" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_docamsam" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Espace documentaire</h4>
            <img src="images/Portfolio/realisations_web/documentation_amsam.jpg" class="responsive-img" alt="Espace documentaire">
            <hr>
            <p>Site mis en place sous Concrete5 en relation avec un espace Owncloud (pour la mise à jour des documents).</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="https://documentation.amsam-02.com/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_aestheticgroup" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Boutique Aesthetic Group</h4>
            <img src="images/Portfolio/realisations_web/aesthetic-2.jpg" class="responsive-img" alt="Boutique Aesthetic Group">
            <hr>
            <p>Site mis en place sous Prestashop.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="https://www.aestheticgroup.fr" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_filebox" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Filesbox</h4>
            <img src="images/Portfolio/realisations_web/touquetbox.png" class="responsive-img" alt="Filesbox">
            <hr>
            <p>Site de sauvegarde de fichier (Owncloud like) personnalisé.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_marcelhartmann" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Marcel Hartmann</h4>
            <img src="images/Portfolio/realisations_web/marcel_hartmann_2.png" class="responsive-img" alt="Marcel Hartmann">
            <hr>
            <p>Site de gallerie photographique, basée sur la Filesbox.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.marcelhartmann.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_tervia" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Tervia</h4>
            <img src="images/Portfolio/realisations_web/tervia2.jpg" class="responsive-img" alt="La tangente">
            <hr>
            <p>Site Web de Tervia.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.tervia.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_latangente" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">La Tangente</h4>
            <img src="images/Portfolio/realisations_web/latangente.jpg" class="responsive-img" alt="La tangente">
            <hr>
            <p>Site Web d'un groupe musical. Commande de CD avec Paypal.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.latangente.band/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_phileasjv" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Phileas JV</h4>
            <img src="images/Portfolio/realisations_web/phileas-jv-2.jpg" class="responsive-img" alt="Phileas JV">
            <hr>
            <p>Site Web d'un spécialiste de la location de véhicule. Carte Google Map interactive.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_spta" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">SPTA</h4>
            <img src="images/Portfolio/realisations_web/spta.jpg" class="responsive-img" alt="SPTA">
            <hr>
            <p>Site Web de la SPTA.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.spta.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_ecab80" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">ECAB80</h4>
            <img src="images/Portfolio/realisations_web/ecab80.jpg" class="responsive-img" alt="ECAB80">
            <hr>
            <p>Site Web de ECAB80.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.ecab80.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_leflightcase" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Le Flight Case</h4>
            <img src="images/Portfolio/realisations_web/leflightcase.jpg" class="responsive-img" alt="Le Flight Case">
            <hr>
            <p>Site Web de Le Flight Case.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.leflightcase.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_picabou" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Picabou</h4>
            <img src="images/Portfolio/realisations_web/picabou.jpg" class="responsive-img" alt="Picabou">
            <hr>
            <p>Site Web de Picabou.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.picabou.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_exgtransfert" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">EXG Transfert</h4>
            <img src="images/Portfolio/realisations_web/screen_exg.jpg" class="responsive-img" alt="EXG Transfert">
            <hr>
            <p>Outil de partage d’Electroencéphalogramme.</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <a href="http://www.exg-transfert.com" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_gmcc" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">GMCC</h4>
            <img src="images/Portfolio/realisations_web/e07fa5f0-e54e-11e2-9efe-22000a91e9a7-large.jpg" class="responsive-img" alt="GMCC">
            <hr>
            <p>-</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="http://www.picabou.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_monitoring" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Monitoring</h4>
            <img src="images/Portfolio/realisations_web/4e70918c-e54f-11e2-a77d-22000aa5129e-large.jpg" class="responsive-img" alt="Monitoring">
            <hr>
            <p>-</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="http://www.picabou.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_extranetclient" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">Extranet Client</h4>
            <img src="images/Portfolio/realisations_web/861a0b22-e545-11e2-ada0-22000aa5108a-large.jpg" class="responsive-img" alt="Extranet Client">
            <hr>
            <p>-</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="http://www.picabou.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- Portfolio Detail Modal -->
        <div id="Portfolio_Detail_odi" class="modal">
          <div class="modal-content">
            <a href="javascript:void(0)" class="modal-action modal-close close btn-floating btn waves-effect waves-teal white"><i class="material-icons light-green-text text-darken-3">close</i></a>
            <h4 class="modal-title">ODI</h4>
            <img src="images/Portfolio/realisations_web/2cfbfae6-e54f-11e2-a77d-22000aa5129e-large.jpg" class="responsive-img" alt="ODI">
            <hr>
            <p>-</p>
          </div>
          <div class="modal-footer">
            <!--<a href="#!" class="waves-effect btn-flat left light-green-text text-darken-3">MORE INFO</a>-->
            <!--<a href="http://www.picabou.fr/" target="_blank" class="waves-effect btn-flat right light-green-text text-darken-3">VOIR</a>-->
          </div>
        </div>
        <!-- # Portfolio Detail Modal End # -->
        <!-- jQuery-->
        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <!-- materialize -->
        <script type="text/javascript" src="assets/js/materialize.js"></script>
        <!-- jquery easing -->
        <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
        <!-- mCustomScrollbar -->
        <script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <!-- Modernizr -->
        <script type="text/javascript" src="assets/js/modernizr.js"></script>
        <!-- scripts init -->
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-89915876-1', 'auto');
          ga('send', 'pageview');

        </script>
      </body>

      </html>
