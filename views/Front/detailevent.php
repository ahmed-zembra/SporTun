 <?php

include '../Dashboard/DBconnection.php';
include 'PHPfunctions.php';



session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
    $email=$_SESSION['email'];
}


if(isset($_GET['image'])) {
    $image = ($_GET['image']);
    
    }else{
        $image = 'image';
    }

$id = $_GET['id'];
$sql = "SELECT * FROM events WHERE id=". $id .";";

/********** inc vues****************/ 
$vues = "UPDATE events SET vues = vues +1 WHERE id =" . $id .";";
$conn->query($vues);

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


//Produits Connexes




//echo $sql1; die;
//echo $row['categorie']


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <title>SporTun</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="annonce.php">Produits</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='AjouterAnnonce.php'>Vendre un produit</a></li>";
                }?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>

      </div>



      <!----------single product details------>

      
        <div class="small-container single-product" >
            <div class="row">
                <div class="col-2">
                <?php echo " <img src=../Dashboard/".$row['image']." > "?>
                
                    <div class="small-img-row">
                        <?php

                            echo "<div class='small-img-col'>";
                                echo "<a href=detailevent.php?id=$id&image=image> <img src=/".$row['image']. " width='100%' ></a> ";
                            echo "</div>";
                            
                           
                            

                        ?>
                    </div>     
                
                </div> 
                <div class="col-2">
                    <h1><?php echo $row['titre']; ?></h1>
                    
                    <h4><?php echo $row['prix'] . ' TND'; ?></h4>
                    <input id="quantite" type="number" value="1" min="1">
                              
                    <a href='' onclick="this.href='AjouterPanierbis.php?id=<?php echo$id?>&quantite='+document.getElementById('quantite').value" class='btn'>Ajouter Au Panier</a>
                
                    <h3>Description <i class="fa fa-indent"></i></h3>
                    <br>
                    <p><?php echo $row['deslongue']; ?></p>

                </div>
            </div>
        </div>


    <!-----------------title------------------------->
       

    <!-------------------products-------------------->


    

    

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
        </div>
    </div>



<!---------------js for product gallery------------>

<script>
     var ProductImg = document.getElementById("ProductImg");
     var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }

        
</script>
  <!-------js for toggle menu -------->
  <script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="250px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
</body>
</html>