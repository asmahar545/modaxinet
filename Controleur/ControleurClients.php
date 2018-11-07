<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Clients.php';
require_once 'Modele/Admin.php';
require_once 'Modele/Prestation.php';

/**
 * Contrôleur des actions liées au client
 * 
 * @author harmach Asmae
 */
class ControleurClients extends ControleurSecurise
{
    private $admin;
    private $prestation;
    private $client;

    public function __construct()
    {
      
        $this->admin= new Admin();
        $this->prestation=new Prestation();
        $this->client=new Clients();
    }

    /**
     * Affiche la page de modification des infos client
     */
    public function index()
    {

        $client=$this->client->getClient();

        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        $this->genererVue(array('clients'=>$client,'email' => $emaila,'nom'=>$noma));


    }
    

    

}
