<?php
include 'DBconnection.php';
session_start();
if (isset($_SESSION["email"]))
{
    header("Location: profile.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="index.html"> <img src="assets/img/logo.png"> </a>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.html"> <img src="assets/img/logo.png"> </a>
        </div>
    
    <nav>
        <ul>
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="annonce.html">Annonces</a></li>
            <li><a href="billets.html">Billets</a></li>
            <li><a href="actualites.html">Actualités</a></li>
            <li><a href="account.php">Compte</a></li>
        </ul>
    </nav>
    <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
  </div>
  </div>
  
<!--------------- account-page ----------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="assets/img/image1.png" alt="" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="register()">Inscription</span>
                        <span onclick="login()">Connexion</span>
                        <hr id="indicator">
                    </div>
                    <form action="login.php" method="POST" id="LoginForm">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="mdp" placeholder="password">
                        <button type="submit" class="btn">Connexion</button>
                        <a href="mdp.html">Mot de passe oublié ?</a>
                    </form>
                    
                    <div class="reg-container">
                        <form action="SignUp.php" method="POST" id="RegForm" name="f">
                        <input type="text" name="nom" placeholder="Nom" id="nom">
                        <input type="text" name="prenom" placeholder="Prénom" id="prenom">
                        <input type="email" name="email" placeholder="Email" id="email">
                        <input type="password" name=mdp placeholder="Mot de passe" id="mdp">
                        <input type="password" name=mdp placeholder="Confirmer votre mot de passe" id="mdp2">
                        <input type="date" name="datenaissance" id="datenaissance" min="1919-01-01" max="2004-01-01" >
                        <input type="radio" name="sexe" id="homme" value="H" class="gender">
                        <label for="homme">Homme</label>
                        <input type="radio" name="sexe" id="Femme" value="F" class="gender">
                        <label for="Femme">Femme</label>
                        <input type="radio" name="sexe" id="autre" value="A" class="gender">
                        <label for="autre">Autre</label>
                        <input type="text" name="numtel" placeholder="Numéro de téléphone" id="Numtel">
                        <input type="text" name="adresse" placeholder="Adresse" id="Adresse">
                        <button type="submit" class="btn" value="RegForm" onclick="verif()">S'inscrire</button>
                        
                    </form>
                    

                </div>

                <p style="color: rgb(255, 0, 0);" id="erreurinscription"></p>
                <script src="login.js"></script> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>



   <!-----------------------js for toggle form -------------> 
   <script>
        function login(){
            document.getElementById("RegForm").style.transform="translateX(0px)";
            document.getElementById("LoginForm").style.transform="translateX(0px)";
            document.getElementById("indicator").style.transform="translateX(100px)";
                    }
        function register(){
            document.getElementById("RegForm").style.transform="translateX(300px)";
            document.getElementById("LoginForm").style.transform="translateX(300px)";
            document.getElementById("indicator").style.transform="translateX(0px)";
        }
   </script>
<!---------- footer ------------>
<div class="footer" >
    <div class="container" style= >
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
    </div>
</div>
</body>
</html>