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

    public function action_livres_par_titre_resultat()
    {
        $choix=$_POST['choixtitre'];
        // echo "Le choix est ".$choix;

        $m=Model::get_model();
        $data=['livres'=>$m->get_livres_par_titre_resultat($choix)];
        $this->render("livres_par_titre_resultat",$data);

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

    
}