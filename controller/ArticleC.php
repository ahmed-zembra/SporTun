<?PHP
include "C://wamp64/www/SporTun/config.php";
require_once 'C://wamp64/www/SporTun/model/Articles.php';

class articleC
{

    public function ajouterArticle($article)
    {
        $sql = "INSERT INTO article(titre,texte,auteur,urlImage,notifCreateur,Datearticle,postCategory) 
			VALUES (:titre,:texte,:auteur,:urlImage,:notifCreateur,now(),:postCategory)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'titre' => $article->getTitre(),
                'texte' => $article->getTexte(),
                'auteur' => $article->getAuteur(),
                'urlImage' => $article->getUrlImage(),
                'notifCreateur' => $article->getNotifCreateur(),
               // 'Datearticle' => $article->getDatearticle(),
                'postCategory' => $article->getPostCategory(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function afficherarticle()
    {
        $limit = 12;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql="SELECT * FROM article ORDER BY Datearticle DESC LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function af()
    {
        $limit = 4;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherarticledash()
    {
        $sql="SELECT * FROM article ORDER BY Datearticle DESC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpop1()
    {
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichermostviews()
    {
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT 5";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpopfoot()
    {
        $sql="SELECT * FROM article where postCategory = 'FootBall' ORDER BY vues DESC LIMIT 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpopfoot1()
    {
        $sql="SELECT * FROM article where postCategory = 'FootBall' ORDER BY vues DESC LIMIT 1, 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpop2()
    {
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT 1, 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherfootball()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'FootBall' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherfoot()
    {
        $sql = "SELECT * FROM article WHERE postCategory = 'FootBall' order by Datearticle desc LIMIT 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichertennis()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'Tennis' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherathletisme()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'Athlétisme' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherhandball()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'HandBall' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichercyclisme()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'Cyclisme' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbreauteur()
    {
        $sql = "SELECT COUNT(DISTINCT auteur) as nbr FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrearticle()
    {
        $sql = "SELECT COUNT(*) as nbrart FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrefb()
    {
        $sql = "SELECT COUNT(postCategory) as nbrfb FROM article WHERE postCategory = 'FootBall'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbretennis()
    {
        $sql = "SELECT COUNT(postCategory) as nbrtn FROM article WHERE postCategory = 'Tennis'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrehb()
    {
        $sql = "SELECT COUNT(postCategory) as nbrhb FROM article WHERE postCategory = 'HandBall'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbreath()
    {
        $sql = "SELECT COUNT(postCategory) as nbrath FROM article WHERE postCategory = 'Athlétisme'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrecyc()
    {
        $sql = "SELECT COUNT(postCategory) as nbrcyc FROM article WHERE postCategory = 'Cyclisme'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function postarticle($id)
    {

        $sql = "SELECT * FROM article where idNewsArticle =" . $_GET["idNewsArticle"];
        $sql1 = "UPDATE article SET vues = vues +1 WHERE idNewsArticle =" . $_GET["idNewsArticle"];
        $db = config::getConnexion();
        try {
            $hh = $db->query($sql1);
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerarticle($id)
    {
        $sql = "DELETE FROM article WHERE idNewsArticle = :idNewsArticle";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idNewsArticle', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierarticles($article, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE article SET 
						titre = :titre, 
						texte= :texte,
						auteur = :auteur,
						urlImage = :urlImage,
                        notifCreateur = :notifCreateur,
                        Datearticle = now(),
                        postCategory = :postCategory
					WHERE idNewsArticle = :idNewsArticle'
            );
            $query->execute([
                'titre' => $article->getTitre(),
                'texte' => $article->getTexte(),
                'auteur' => $article->getAuteur(),
                'urlImage' => $article->getUrlImage(),
                'notifCreateur' => $article->getNotifCreateur(),
                //'Datearticle' => $article->getDatearticle(),
                'postCategory' => $article->getPostCategory(),
                'idNewsArticle' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererarticle($id)
    {
        $sql = "SELECT * from article where idNewsArticle=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function sortdate1()
    {
        $sql = "SELECT * from article order by Datearticle desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate2()
    {
        $sql = "SELECT * from article order by Datearticle asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function affvues()
    {
        $sql = "SELECT * from article order by vues desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recentpost()
    {
        $sql = "SELECT * from article order by Datearticle desc limit 3";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recentpost2()
    {
        $sql = "SELECT * from article order by Datearticle desc limit 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function search($text){
		if(!empty($_POST['q'])){
			$q = $_POST['q'];
			$q = "%".$q."%";
        $text = strtolower($text); 
        $limit = 12;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $query = "SELECT * FROM article WHERE titre LIKE '$text' OR auteur LIKE '$text' OR texte LIKE '$text' OR postCategory LIKE '$text' or Datearticle LIKE '$text' order by Datearticle desc LIMIT $start, $limit";
		$db = config::getConnexion();
		try {
			$stmt = $db->query($query);
			$stmt->execute([$text,$text,$text,$text,$text]);
            return $stmt;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
	}
}
}
