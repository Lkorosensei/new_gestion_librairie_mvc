<?php

class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=gestion_librairie_mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

    

// -----------------------------------------------PARTIE LIVRE------------------------------------------------------------------------------------//
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT * FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_titre()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    

    public function get_livres_par_auteur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Nom_auteur, Prenom_auteur FROM livres ORDER BY Nom_auteur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    
    public function get_livres_par_editeur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Editeur FROM livres ORDER BY Editeur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

   
    // ----------------------------- Resultat de la recherche -----------------------------------------------

    public function get_livres_par_titre_resultat($choix_livre_titre)
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Titre_livre = :t');
            $requete->execute(array(':t'=>$choix_livre_titre));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_auteur_resultat($choix_livre_auteur)
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Nom_auteur = :n');
            $requete->execute(array(':n'=>$choix_livre_auteur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_editeur_resultat($choix_livre_editeur)
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Editeur = :e');
            $requete->execute(array('e'=> $choix_livre_editeur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


// ----------------------------------PARTIE FOURNISSEURS-------------------------------------------------------------------------//
   

    public function get_all_fournisseurs()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT * FROM fournisseurs ORDER BY Raison_sociale ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_fournisseurs_par_raison_sociale()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Raison_sociale FROM fournisseurs ORDER BY Raison_sociale ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_localite()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Localite FROM fournisseurs ORDER BY Localite ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_pays()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Pays FROM fournisseurs ORDER BY Pays ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ----------------------------- Resultat de la recherche ----------------------------------------------


    public function get_fournisseurs_par_raison_sociale_resultat($choix_fournisseurs_raison_sociale)
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Raison_sociale = :r');
            $requete->execute(array(':r'=>$choix_fournisseurs_raison_sociale));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_localite_resultat($choix_fournisseurs_localite)
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Localite = :l');
            $requete->execute(array('l'=>$choix_fournisseurs_localite));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_pays_resultat($choix_fournisseurs_pays)
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Pays = :p');
            $requete->execute(array(':p'=> $choix_fournisseurs_pays));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    

// ----------------------------------PARTIE COMMANDES-------------------------------------------------------------------------//

    public function get_all_commandes()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT * FROM commandes INNER JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.Id_fournisseur INNER JOIN livres ON livres.Id_Livre = commandes.Id_Livre ORDER BY Titre_livre ASC ');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_editeur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Editeur FROM commandes INNER JOIN livres ON livres.Id_Livre = commandes.Id_Livre ORDER BY Editeur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_fournisseurs()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Raison_sociale FROM commandes INNER JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.Id_fournisseur ORDER BY Raison_sociale ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_date()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Date_achat FROM commandes ORDER BY Date_achat ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ----------------------------- Resultat de la recherche ----------------------------------------------

    public function get_commandes_par_editeur_resultat()
    {
        $choix_commandes_par_editeur=$_POST['choix_commandes_editeur'];
        echo "le choix est ".$choix_commandes_par_editeur;

        try {
            $requete = $this->bd->prepare('SELECT * FROM commandes INNER JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.Id_fournisseur INNER JOIN livres ON livres.Id_Livre = commandes.Id_Livre WHERE Editeur = :e');
            $requete->execute(array(':e'=> $choix_commandes_par_editeur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_fournisseurs_resultat()
    {
        $choix_commandes_par_fournisseurs=$_POST['choix_commandes_fournisseurs'];
        echo "le choix est ".$choix_commandes_par_fournisseurs;

        try {
            $requete = $this->bd->prepare('SELECT * FROM commandes INNER JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.Id_fournisseur INNER JOIN livres ON livres.Id_Livre = commandes.Id_Livre WHERE Raison_sociale = :r');
            $requete->execute(array(':r'=> $choix_commandes_par_fournisseurs));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_date_resultat()
    {
        $choix_commandes_par_date=$_POST['choix_commandes_date'];
        echo "le choix est ".$choix_commandes_par_date;

        try {
            $requete = $this->bd->prepare('SELECT * FROM commandes INNER JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.Id_fournisseur INNER JOIN livres ON livres.Id_Livre = commandes.Id_Livre WHERE Date_achat = :d');
            $requete->execute(array(':d'=> $choix_commandes_par_date));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}
