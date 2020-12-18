<?php
include 'DBconnection.php';
session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SporTun</title>
    <link rel="stylesheet" href="billets.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="logo.ico">
    
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="annonce.php">Annonces</a></li>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
      </div>
     
 <!-------- featured categories -------->
   
<br>

 <div class="container">
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image"> 
                            <img src="unnamed.jpg" class="img-responsive"> 
                            <span class="tag2 hot">
                                HOT
                            </span> 
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    Tournoi Foot Junior
                                </a>
                                <a href="#">
                                    <span>Tournoi</span>
                                </a>                            
    
                            </h5>
                            <p class="price-container">
                                <span>15 DT</span>
                            </p>
                            <span class="tag1"></span> 
                    </div>
                    <div class="description">
                        <p>Tournoi de Football junior qui aura lieu à El Ghazela </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12"> 
                                <a href="javascript:void(0);" class="btn btn-danger">Ajouter au panier</a>
                                <a href="javascript:void(0);" class="btn btn-info">Plus d'informations</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image"> 
                            <img src="westminster-mile.jpg" alt="194x228" class="img-responsive"> 
                            <span class="tag2 hot">
                                HOT
                            </span> 
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    Marchons contre le SIDA<span>Oeuvre carritative</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <span>7 DT</span>
                            </p>
                            <span class="tag1"></span> 
                    </div>
                    <div class="description">
                        <p>Marathon carritatif sensibiliser les gens contre Le virus du SIDA </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12"> 
                                <a href="javascript:void(0);" class="btn btn-danger">Ajouter au panier</a>
                                <a href="javascript:void(0);" class="btn btn-info">Plus d'informations</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
    <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image"> 
                            <img src="images/products/p2.png" alt="194x228" class="img-responsive"> 
                            <span class="tag3 special">
                                Special
                            </span> 
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    Product Code/Name here <span>Product Category</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <span>$299</span>
                            </p>
                            <span class="tag1"></span> 
                    </div>
                    <div class="description">
                        <p>A Short product description here </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12"> 
                                <a href="javascript:void(0);" class="btn btn-danger">Ajouter au panier</a>
                                <a href="javascript:void(0);" class="btn btn-info">Plus d'informations</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image"> 
                            <img src="images/products/p3.png" alt="194x228" class="img-responsive"> 
                            <span class="tag2 sale">
                                SALE
                            </span> 
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    Product Code/Name here <span>Product Category</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <span>$1000</span>
                            </p>
                            <span class="tag1"></span> 
                    </div>
                    <div class="description">
                        <p>A Short product description here </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12"> 
                                <a href="javascript:void(0);" class="btn btn-danger">Ajouter au panier</a>
                                <a href="javascript:void(0);" class="btn btn-info">Plus d'informations</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    
    
            
    </div>
</div></div>

  
    

    <!---------- footer ------------>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger application pour Android et ios mobile</p>
                    <div class="app-logo">
                        <img src="assets/img/play-store.png" alt="">
                        <img src="assets/img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img class="logofooter" src="assets/img/logo-footer.png" alt="">
                    <p>Donnez Un Nouveau Style à Votre Entrainement !</p>
                </div>
                <div class="footer-col-3">
                    <h3>Liens</h3>
                    <ul>
                        <li>Coupons</li>    
                        <li>Blog</li>
                        <li>Rejoindre affilié</li>
                        <li>test</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow  us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - SporTun</p>
        
   
</body>
</html>