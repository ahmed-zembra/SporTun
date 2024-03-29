<?php

include '../Dashboard/DBconnection.php';
include '../../controller/PHPfunctions.php';


session_start();

$choix='Par défaut';
$noresultmsg='Désolé, il n’y a aucun produit actuellement.';


$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}



if(isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    }else{
        $categorie = 'Tous Les Produits';   
    }

if(isset($_GET['tri'])) {
$tri = $_GET['tri'];
}else{
    $tri = 0;
}

if(isset($_GET['npage'])) {
$npage = ($_GET['npage']);

}else{
    $npage = 0;
}



if(isset($_POST['submit_search'])){
    $search=mysqli_real_escape_string($conn,$_POST['search']);
}else{
    if(isset($_GET['search']))
    $search=$_GET['search'];
    else{
    $search='';
    }
}

/********************nombre des produits à afficher pour tous les critères sélectionnés ***********************/

            if($categorie == 'Tous Les Produits'){
            $sql1 = "SELECT * FROM miseenvente WHERE (titre LIKE '%$search%' OR description LIKE '%$search%' OR 
            categorie LIKE '%$search%' OR prix LIKE '%$search%') ;"; 
            }else{
            $sql1 = "SELECT * FROM miseenvente WHERE (titre LIKE '%$search%' OR description LIKE '%$search%' OR 
            categorie LIKE '%$search%' OR prix LIKE '%$search%') AND categorie ='" . $categorie. "';";
            }
            $result1=mysqli_query($conn,$sql1);
            $NbAnnonces=mysqli_num_rows($result1);
            if($NbAnnonces==0){
                if($search==''){
                $noresultmsg= "Désolé, Il n'y a aucun produit qui correspond à la categorie sélectionnée .";
                }else{
                $noresultmsg= "Désolé, aucun résultat ne correspond à vos critères de recherche.";
                }
                }
                
    
/*******************Triage ************************/


        //Par défaut
    if($tri==0){

        $sql="SELECT * from miseenvente WHERE titre LIKE '%$search%' OR description LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%'  ;";
        //echo $sql; die;
        $result=mysqli_query($conn,$sql);
        $choix='Par défaut';


    }
        //Popularité
    if($tri==1){

        $sql="SELECT * from miseenvente WHERE titre LIKE '%$search%' OR description LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY vues DESC;";
        $result=mysqli_query($conn,$sql);
        $choix='Popularité';

    }

        //Nouveautés
    if($tri==2){

        $sql="SELECT * FROM miseenvente WHERE titre LIKE '%$search%' OR description LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY date_time DESC ;";
        $result=mysqli_query($conn,$sql);
        $choix='Nouveautés';


    }

        //Prix le plus bas
    if($tri==4){

        $sql="SELECT * FROM miseenvente WHERE titre LIKE '%$search%' OR description LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY prix ASC ;";
        //echo $sql; die;
        $result=mysqli_query($conn,$sql);
        $choix='Prix le plus bas';


    }
        //Prix le plus élevé
    if($tri==5){

        $sql="SELECT * FROM miseenvente WHERE titre LIKE '%$search%' OR description LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY prix DESC ;";
        $result=mysqli_query($conn,$sql);
        $choix='Prix le plus élevé';


    }











?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SporTun</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
                <li><a href="Annonce.php">Produits</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>";
                }?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="Publicite.php">Publicite</a></li>
                <li><a href="account.php"><?php echo"$compte"?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>

      </div>




     <!-------- featured categories -------->
    <div class="categories">
    
        <div class="small-container">

            <h2 class="title">Catégories</h2>



            <div class="row">
                <?php $s=$npage+1;?>
                <?php echo "<a href='Annonce.php?categorie=Fitness Muscu&?npage=$s&tri=$tri&#c1' class='col-categories'>";?>
                    <img src="assets/img/20_thumb.png" alt="Fitness Muscu">
                    <h2>FITNESS MUSCU</h2>
                </a>
                <?php echo "<a href='Annonce.php?categorie=Cyclisme&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                    <img src="assets/img/18_thumb.png" alt="Cyclisme">
                    <h2>CYCLISME</h2>
                </a>
                <?php echo "<a href='Annonce.php?categorie=Equitation&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                    <img src="assets/img/4_thumb.png" alt="Equitation">
                    <h2>EQUITATION</h2>
                </a>
                <?php echo "<a href='Annonce.php?categorie=Golf&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                    <img src="assets/img/8_thumb.png" alt="Golf">
                    <h2>GOLF</h2>
                </a>
                <?php echo "<a href='Annonce.php?categorie=Nautique&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                    <img src="assets/img/21_thumb.png" alt="Nautique">
                    <h2>NAUTIQUE</h2>
                </a>
                <?php echo "<a href='Annonce.php?categorie=Autre&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                    <img src="assets/img/230_thumb.png" alt="Autre">
                    <h2>AUTRE</h2>
                </a>
        
            </div>

            <br>
            <div class="row">
                <?php echo "<a href='Annonce.php?categorie=Tous Les Produits&?npage=$s&tri=$tri#c1' class='col-allproducts'>";?>
                    <img src="assets/img/equipements.png" style="width: 100%;" alt="Fitness Muscu">
                    <h2>TOUS LES PRODUITS</h2>
                </a>   
            </div>
            

        </div>

        


     </div> 
    
        <div id="c1" class="small-container">

            <div class="row row-2">
                

                <?php echo"<h2>$categorie</h2>";?>

                
                <select name="formal" onchange="javascript:handleSelect(this)">  
                <?php echo "<option selected disabled value='Sélectionner'>$choix</option>";?>
                <option value="0">Par défaut</option> 
                <option value="1">Popularité</option> 
                <option value="2">Nouveautés</option> 
                <option value="4">Prix le plus bas</option> 
                <option value="5">Prix le plus élevé</option> 
                </select> 

            </div>


            
            <form action=<?php echo "'Annonce.php?categorie=$categorie#c1'";?> class="search-form" method="POST" role="search">
            <input id="search" type="search" name="search" value="<?php echo $search; ?>" placeholder="chercher..." />
            <button type="submit" name="submit_search" class="search-button"><i class="fas fa-search"></i></button>    
            </form>



<!--
        <select name="select-city" onchange="location = this.value;"> 
            <option value="">Select-City</option> 
            <option value="https://en.wikipedia.org/wiki/New_Delhi">Popularité</option> 
            <option value="https://en.wikipedia.org/wiki/New_York">Nouveautés</option> 
            <option value="https://en.wikipedia.org/wiki/Bern">Mieux notés</option> 
            <option value="https://en.wikipedia.org/wiki/Beijing">Prix le plus bas</option> 
            <option value="https://en.wikipedia.org/wiki/New_Delhi">Prix le plus élevé</option> 

        </select> 
-->
        <?php
        
        /*echo $categorie;
        echo"</br>";
        echo $tri;
        echo"</br>";
        echo $npage;*/

        if($NbAnnonces==0){
        
            echo "</br></br></br></br></br>";
            echo "<h1 style='text-align:center;'> $noresultmsg </h1>";
            echo "</br></br></br>";
            
        }else{


        echo"<div class='row'>";
        $n=0;
        $i=0;
        while($rows=mysqli_fetch_assoc($result))
        {
            if(($rows['categorie']==$categorie)||($categorie=='Tous Les Produits')){
                if($n>=($npage*12))
                {   
                    $i++;
                    $id=$rows['id'];
                    ?>
                        <div class="col-4">
                        <?php $description=LimitCharacter($rows['description'],50); ?>
                        <?php echo "<a href=DetailsAnnonce.php?id=$id> <img src=assets/img/".$rows['image1']." ></a> "?>
                        
                            <h4><?php echo $rows['titre']; ?></h4>
                            <p><?php echo $rows['prix'] . ' TND'; ?></p>
                            <p><?php echo $description; ?></p>
                            <!--<p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Nada </a> </p>-->

                            
                        </div>
                    <?php

                }
            }

            $n++;
            if($i==12)
            break;

            
            


        }
        }
        
        

        echo"</div>";    
           echo" <div class='page-btn'>";


        if($npage!=0){
            $s=$npage-1;
            echo"<a href='Annonce.php?categorie=$categorie&npage=$s&tri=$tri&search=$search#c1'><span>&#8592;</span></a>"; 
        }



        $nbpages=intdiv($NbAnnonces, 12);
        $mod=$NbAnnonces%12;
        if($mod>0){
            $nbpages+=1;
            }

        for($i=0;$i<$nbpages;$i++){
            $s=$i+1;
            if($npage==$i){
                if($nbpages>1)
                echo"<a class='active' href='Annonce.php?categorie=$categorie&npage=$i&tri=$tri&search=$search#c1'><span>$s</span></a>";
            }else{
                echo"<a href='Annonce.php?categorie=$categorie&npage=$i&tri=$tri&search=$search#c1'><span>$s</span></a>";
            }
            
        }

        
        if($npage!=($nbpages-1)){

            if($NbAnnonces>12){
                $s=$npage+1;
                echo"<a href='Annonce.php?categorie=$categorie&npage=$s&tri=$tri&search=$search#c1'><span>&#8594;</span></a>"; 
            }      
        
        }




        

            ?>
        </div>
        
      
        

           <!-- <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>  -->          

    

    </div>


    

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



        <script type="text/javascript"> 
            function handleSelect(elm) 
            {
            var categorie = "<?php echo $categorie; ?>";
            var search = "<?php echo $search; ?>";
            window.location = "Annonce.php?&categorie="+categorie+"&npage=0&tri="+elm.value+"&search="+search+"#c1"; 
            //window.location = "AjouterAnnonce.html?tri=1"; 
            //window.location = elm.value+".php"; 
            } 
        </script>


        
<!-------js for toggle menu -------->
<script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="280px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
        


</body>
</html>