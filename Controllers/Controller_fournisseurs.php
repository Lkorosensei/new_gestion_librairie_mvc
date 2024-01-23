<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// ----------------------------------- Action Fournisseurs --------------------------------------------------------

    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);

    }

    public function action_fournisseurs_par_raison_sociale()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseurs_par_raison_sociale()];
        $this->render("fournisseurs_par_raison_sociale",$data);

    }
    

    public function action_fournisseurs_par_localite()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseurs_par_localite()];
        $this->render("fournisseurs_par_localite",$data);

    }

    public function action_fournisseurs_par_pays()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseurs_par_pays()];
        $this->render("fournisseurs_par_pays",$data);

    }

// ------------------------------------------ Resultat Recherche Fournisseurs ----------------------------

public function action_fournisseurs_par_raison_sociale_resultat()
    {
        $choix_fournisseurs_raison_sociale = $_POST['choix_fournisseurs_raison_sociale'];
        echo "Le choix est ".$choix_fournisseurs_raison_sociale;

        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseurs_par_raison_sociale_resultat($choix_fournisseurs_raison_sociale)];
        $this->render("fournisseurs_par_raison_sociale_resultat",$data);

    }
    

    public function action_fournisseurs_par_localite_resultat()
    {
        $choix_fournisseurs_localite = $_POST['choix_fournisseurs_localite'];
        echo "Le choix est ".$choix_fournisseurs_localite;

        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseurs_par_localite_resultat($choix_fournisseurs_localite)];
        $this->render("fournisseurs_par_localite_resultat",$data);

    }

    public function action_fournisseurs_par_pays_resultat()
    {
        $choix_fournisseurs_pays = $_POST['choix_fournisseurs_pays'];
        echo "Le choix est ".$choix_fournisseurs_pays;

        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseurs_par_pays_resultat($choix_fournisseurs_pays)];
        $this->render("fournisseurs_par_pays_resultat",$data);

    }


}