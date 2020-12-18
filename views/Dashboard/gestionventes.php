<?php
include 'DBconnection.php';
$sql='select * from vente;';
$result=mysqli_query($conn,$sql);
$sql='select count(idvente) as total from vente ;';
$resultat=mysqli_query($conn,$sql);
$nbvente=mysqli_fetch_assoc($resultat);
$sql='select email, count(*) as c FROM vente GROUP BY email ORDER BY c DESC';
$resultat=mysqli_query($conn,$sql);
$sql='select email, sum(prix) as s FROM vente GROUP BY email ORDER BY s DESC';
$resultatprix=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">



    <!-- Title Page-->
    <title>Gestion des ventes</title>

    <!-- Fontfaces CSS-->
    
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="css/styles.css" rel="stylesheet" media="all">
</head>
<body >
 <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="gestioncomptes.php">
                                    <i class="fas fa-home"></i>
                                    <span class="bot-line"></span>Gestion des comptes
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-bullhorn"></i>
                                    <span class="bot-line"></span>Gestion des annonces</a>
                            </li>
                            <li>
                                <a href="table.html">
                                    <i class="fas fa-tag"></i>
                                    <span class="bot-line"></span>Gestion des billets</a>
                            </li>  
                            <li class="has-sub">
                                <a href="gestionventes.php">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="bot-line"></span>Gestion des ventes</a>
                            
                            </li> 
                            
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-list-alt"></i>
                                    <span class="bot-line"></span>Gestion des actualités</a>
                            
                            </li>
                            
                        </ul>
                    </div>
                    <div class="header__tool">
                        
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                               
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.png" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="imag/avat.png" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">ash</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">ash</a>
                                    </h5>
                                    <span class="email">ash@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

      
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
        <section class="statistic statistic2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item statistic__item--blue" style="left:500px;">
                                            <h2 class="number"><?php echo ($nbvente['total']) ?></h2>
                                            <span class="desc">Nombre de vente</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                     </section>
            
            <div class="container">
            <div class="row">
            <div class="col-md-12">

            
                    
                    
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Titre</th>
                                <th>Prix</th>
                                <th>Date de vente</th>
                                

                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['idvente']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['titre']; ?></td>
                                <td><?php echo $rows['prix']; ?></td>
                                <td><?php echo $rows['datevente']; ?></td>
                                

                            </tr>

                            <?php
                            }
                            ?>
                            <tr class="spacer"></tr>
                            


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                  

                     <div class="page-content--bgf7">
            
            <div class="container">
            <div class="row">
            <div class="col-md-12">

            
                    
                    
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Montant dépensé</th>
                                

                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($resultatprix))
                            {
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['s']; ?></td>
                                
                                

                            </tr>

                            <?php
                            }
                            ?>
                            <tr class="spacer"></tr>
                            


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

                     <div class="page-content--bgf7">
            
            <div class="container">
            <div class="row">
            <div class="col-md-12">

            
                    
                    
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Nombre d'achats</th>
                                

                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($resultat))
                            {
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['c']; ?></td>
                                
                                

                            </tr>

                            <?php
                            }
                            ?>
                            <tr class="spacer"></tr>
                            


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


                <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    <script src="vendor/animsition/animsition.min.js"></script>

    
   
   
    
    

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>