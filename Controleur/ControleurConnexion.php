<?php

require_once 'Framework/Controleur.php';

require_once 'Modele/Admin.php';
require_once 'Modele/Prestation.php';
require_once 'Modele/Clients.php';


/**
 * Contrôleur gérant la connexion au site
 *
 * @author Baptiste Pesquet
 */
class ControleurConnexion extends Controleur
{
    
    private $admin;

    public function __construct()
    {
      
        $this->admin= new Admin();
        $this->prestation=new Prestation();
        $this->client=new Clients();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function poursuivre(){

        if ($this->requete->existeParametre("courriel") && $this->requete->existeParametre("mdp")) {
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");
            // find the mdp with the email for de the validation
            $mdp1= $this->admin->getAdminMdp();
            $email1= $this->admin->getAdminEmail();
            $nom1=$this->admin->getAdminNom();
            
            $mdpa= $mdp1['MotdePasse'];
            $emaila= $email1['Email'];
            $noma= $nom1['Prénom'];
            // selectionner tous les prestations
            $prestation = $this->prestation->getPrestation();
            $client= $this->client->getClient();
            if($courriel== $emaila && $mdp == $mdpa){

             $this->genererVue(array('email' => $emaila,'nom'=>$noma,'prestation'=>$prestation,'client'=>$client));

          }


          else{
                 $this->genererVue(array('msgErreur' => ' Votre mot de passe  est incorrect ou votre email'),
                       "index");
           }
  
            
        }
        else
           $this->genererVue(array('msgErreur' => 'Reconnecter vous'),
                       "index");
    }

    public function prestations()
   
    {
       
          
            $chantier=$this->prestation->getchantier();
           
            $mdp1= $this->admin->getAdminMdp();
            $email1= $this->admin->getAdminEmail();
            $nom1=$this->admin->getAdminNom();
            
            $mdpa= $mdp1['MotdePasse'];
            $emaila= $email1['Email'];
            $noma= $nom1['Prénom'];
            // selectionner tous les prestations
            $prestation = $this->prestation->getPrestation();
            $client= $this->client->getClient();
          
          

             $this->genererVue(array('chantier'=>$chantier,'email' => $emaila,'nom'=>$noma,'prestation'=>$prestation,'client'=>$client));
  
        
           
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

  
    /**
     * Enregistre un client connecté dans la session et redirige vers la page d'accueil
     * 
     * @param type $courriel
     * @param type $mdp
     */
   
}
