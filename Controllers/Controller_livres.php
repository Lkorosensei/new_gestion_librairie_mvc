<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// ---------------------------------------- Action Livres ------------------------------------------------------

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }

    public function action_livres_par_titre()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_titre()];
        $this->render("livres_par_titre",$data);

    }

    public function action_livres_par_auteur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_auteur()];
        $this->render("livres_par_auteur",$data);

    }

    public function action_livres_par_editeur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_editeur()];
        $this->render("livres_par_editeur",$data);

    }

// --------------------------------- Resultat de la recherche ------------------------------------------------------

    public function action_livres_par_titre_resultat()
    {
        $choix_livre_titre=$_POST['choix_livre_titre'];
        echo "Le choix est ".$choix_livre_titre;

        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_titre_resultat($choix_livre_titre)];
        $this->render("livres_par_titre_resultat",$data);

    }

    public function action_livres_par_auteur_resultat()
    {
        $choix_livre_auteur=$_POST['choix_livre_auteur'];
        echo "Le choix est ".$choix_livre_auteur;

        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_auteur_resultat($choix_livre_auteur)];
        $this->render("livres_par_auteur_resultat",$data);

    }

    public function action_livres_par_editeur_resultat()
    {
        $choix_livre_editeur = $_POST['choix_livre_editeur'];
        echo "Le choix est ".$choix_livre_editeur;

        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_editeur_resultat($choix_livre_editeur)];
        $this->render("livres_par_editeur_resultat",$data);

    }

}