<?php

class Controller_commandes extends Controller
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
    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }

    public function action_commandes_par_editeur()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commandes_par_editeur()];
        $this->render("commandes_par_editeur",$data);

    }

    public function action_commandes_par_fournisseurs()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commandes_par_fournisseurs()];
        $this->render("commandes_par_fournisseurs",$data);

    }

    public function action_commandes_par_date()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commandes_par_date()];
        $this->render("commandes_par_date",$data);

    }

// ------------------------------------------ Resultat Recherche Fournisseurs ----------------------------

public function action_commandes_par_editeur_resultat()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_commandes_par_editeur_resultat()];
    $this->render("commandes_par_editeur_resultat",$data);

}

public function action_commandes_par_fournisseurs_resultat()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_commandes_par_fournisseurs_resultat()];
    $this->render("commandes_par_fournisseurs_resultat",$data);

}

public function action_commandes_par_date_resultat()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_commandes_par_date_resultat()];
    $this->render("commandes_par_date_resultat",$data);

}

}