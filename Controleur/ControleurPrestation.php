<?php

require_once 'Framework/Controleur.php';

require_once 'Modele/Admin.php';
require_once 'Modele/Prestation.php';
require_once 'Modele/Clients.php';


/**
 * Contrôleur gérant la connexion au site
 *
 * @author Harmach Asmae
 */

class ControleurPrestation extends Controleur
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

    public function facturation()
    {
         if ($this->requete->existeParametre("id")){
        //id qui contient le mois de l'année 
        $id = $this->requete->getParametre("id");
        $client=$this->client->getClient();
        
        
        $facturationaout=$this->prestation->getFacturation($id);
        
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
      
    $this->genererVue(array('id'=>$id,'facturationaout'=>$facturationaout,'clients'=>$client,'email' => $emaila,'nom'=>$noma));

      }

            else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");

    }

    public function listprestmois(){

        if ($this->requete->existeParametre("id")){
        
        $id = $this->requete->getParametre("id");
        $client=$this->client->getClient();
        
        $prestationtoute=$this->prestation->getPrestationParMois($id);
        $service=$this->prestation->getServiceMois($id);
        $list=$this->prestation->getPrestationParMois($id);
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        
    $this->genererVue(array('id'=>$id,'prestationtoute'=>$prestationtoute,'id'=>$id,'clients'=>$client,'email' => $emaila,'nom'=>$noma,'list'=>$list,'service'=>$service));

         }
            
            else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");

    }


    public function loger()
    {

        $client=$this->client->getClient();

        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        $this->genererVue(array('clients'=>$client,'email' => $emaila,'nom'=>$noma));
    }

    public function index()
    {

        $client=$this->client->getClient();
        $chantier=$this->prestation->getchantiers();
        $chantiers=$this->prestation->getchantiers();
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        $this->genererVue(array('chantier'=>$chantier,'chantiers'=>$chantiers,'clients'=>$client,'email' => $emaila,'nom'=>$noma));
    }
     public function clients()
    {

        $client=$this->client->getClient();
        $clienttoute=$this->client->getClient();

        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        $this->genererVue(array('clienttoute'=>$clienttoute,'clients'=>$client,'email' => $emaila,'nom'=>$noma));
    }
    public function ajoutClients(){

        $client=$this->client->getClient();
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        $this->genererVue(array('clients'=>$client,'email' => $emaila,'nom'=>$noma));

    }

    public function exesupprclient(){

    if ($this->requete->existeParametre("id")){

      $idcli = $this->requete->getParametre("id");

      $this->client->deleteClient($idcli);

      $email1= $this->admin->getAdminEmail();
      $nom1=$this->admin->getAdminNom();

      $emaila= $email1['Email'];
      $noma= $nom1['Prénom'];
            
     $this->genererVue(array('email' => $emaila,'nom'=>$noma));
    }

    else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }



     public function ajoutjours()
    {

        $client=$this->client->getClient();
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        
    $this->genererVue(array('clients'=>$client,'email' => $emaila,'nom'=>$noma));
    }
    public function ajoutjour()
    {

        $client=$this->client->getClient();
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        
    $this->genererVue(array('clients'=>$client,'email' => $emaila,'nom'=>$noma));
    }


public function jour(){

        $clients=$this->client->getClient();
        $chantier=$this->prestation->getchantiers();
        $chantiers=$this->prestation->getchantiers();
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        
    $this->genererVue(array('chantier'=>$chantier,'chantiers'=>$chantiers,'clients'=>$clients,'email' => $emaila,'nom'=>$noma));



}
public function exejour(){

  if ($this->requete->existeParametre("extra") && $this->requete->existeParametre("description") && $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("idclient") && $this->requete->existeParametre("prix") 
            && $this->requete->existeParametre("chantier") && $this->requete->existeParametre("date") 
         )  {
 
            $extra = $this->requete->getParametre("extra");
            $description = $this->requete->getParametre("description");
            $idclient = $this->requete->getParametre("idclient");
            $ville = $this->requete->getParametre("ville");
            $chantier= $this->requete->getParametre("chantier");
            $prix = $this->requete->getParametre("prix");
            $date = $this->requete->getParametre("date");
       
           
            $this->prestation->ajouterPrestation($extra,$description,$ville,$chantier,$prix,$date,$idclient);
            


            
             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
             $this->genererVue(array('email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");


}


    public function updateService(){
  
         if ($this->requete->existeParametre("id")){
            

             $id= $this->requete->getParametre("id");

             $client=$this->client->getClient();
             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();
       

             $prestation=$this->prestation->getPrestationUnique($id);
             $chantier=$this->prestation->getchantiers();
             $chantiers=$this->prestation->getchantiers();
     
     
            $emaila= $email1['Email'];
            $noma= $nom1['Prénom'];
            
        
            $this->genererVue(array('id'=>$id,'chantier'=>$chantier,'chantiers'=>$chantiers,'prestation'=>$prestation,'clients'=>$client,'email' => $emaila,'nom'=>$noma));
         }

      else


throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

public function exeUpdatePrestation()

    {

      if (  $this->requete->getParametre("id") &&
        $this->requete->existeParametre("date") && 
        $this->requete->existeParametre("prix") &&
        $this->requete->existeParametre("ville") &&  
        $this->requete->existeParametre("chantier") &&
        $this->requete->existeParametre("idclient") &&  
        $this->requete->existeParametre("description") ) 
      {

        $id= $this->requete->getParametre("id");
        $date= $this->requete->getParametre("date");
        $chantier= $this->requete->getParametre("chantier");
        $prix= $this->requete->getParametre("prix");
        $ville= $this->requete->getParametre("ville");
        $idclient= $this->requete->getParametre("idclient");
        $description= $this->requete->getParametre("description");
        //modification
      $this->prestation->updatePrestation($description,$ville,$chantier,$prix,$date,$idclient,$id);
       $email1= $this->admin->getAdminEmail();
       $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
            
        $this->genererVue(array('email' => $emaila,'nom'=>$noma));


        
    }
  else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");

}

public function exeAjoutjour()
    {

        if ($this->requete->existeParametre("description") && $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("nbr_heure") && $this->requete->existeParametre("prix") 
            && $this->requete->existeParametre("idclient") && $this->requete->existeParametre("date1") 
            && $this->requete->existeParametre("date2")&& $this->requete->existeParametre("jour")
            && $this->requete->existeParametre("jour2"))  {
            




            $description = $this->requete->getParametre("description");
            $ville = $this->requete->getParametre("ville");
            $nbr_heure = $this->requete->getParametre("nbr_heure");
            $prix = $this->requete->getParametre("prix");
            $idclient = $this->requete->getParametre("idclient");
            $date1 = $this->requete->getParametre("date1");
            $date2 = $this->requete->getParametre("date2");
            $jour = $this->requete->getParametre("jour");
            $jour2 = $this->requete->getParametre("jour2");
    
             //ajouter la dernière période
            $this->prestation->ajouterPeriode($date1,$date2);
            
            //retourner le dernier ID périod
            $idperiod=$this->prestation->dernierIdPeriod();
            $idp = $idperiod['MAX(ID_period)'];

            $begin = new DateTime($date1);
            
            $end = new DateTime($date2);
            $end = $end->modify( '+1 day' ); 
            //intervalle de chaque jours, boucle à chaque jours 
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($begin, $interval ,$end);

            foreach($daterange as $date){
             $datetest=$date->format("D");
             if($datetest==$jour|| $datetest==$jour2)
             {
            $datex=$date->format("Ymd");
            //ajouter une prestation
            $this->prestation->ajouterPrestation($description,$ville,$nbr_heure,$prix,$datex,$idclient,$idp);}}



             $datetest=$date->format("D");
             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
             $this->genererVue(array('datetest'=>$datetest,'jour2'=>$jour2,'jour'=>$jour,'email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    

    }

    public function exeAjoutjours()
    {

        if ($this->requete->existeParametre("description") && $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("nbr_heure") && $this->requete->existeParametre("prix") 
            && $this->requete->existeParametre("idclient") && $this->requete->existeParametre("date1") 
            && $this->requete->existeParametre("date2")&& $this->requete->existeParametre("jour")
            && $this->requete->existeParametre("jour2")
            && $this->requete->existeParametre("jour3"))  {

            $description = $this->requete->getParametre("description");
            $ville = $this->requete->getParametre("ville");
            $nbr_heure = $this->requete->getParametre("nbr_heure");
            $prix = $this->requete->getParametre("prix");
            $idclient = $this->requete->getParametre("idclient");
            $date1 = $this->requete->getParametre("date1");
            $date2 = $this->requete->getParametre("date2");
            $jour = $this->requete->getParametre("jour");
            $jour2 = $this->requete->getParametre("jour2");
            $jour3 = $this->requete->getParametre("jour3");
    
             //ajouter la dernière période
            $this->prestation->ajouterPeriode($date1,$date2);
            
            //retourner le dernier ID périod
            $idperiod=$this->prestation->dernierIdPeriod();
            $idp = $idperiod['MAX(ID_period)'];

            $begin = new DateTime($date1);
            
            $end = new DateTime($date2);
            $end = $end->modify( '+1 day' ); 
            //intervalle de chaque jours, boucle à chaque jours 
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($begin, $interval ,$end);

            foreach($daterange as $date){
             $datetest=$date->format("D");
             if($datetest==$jour|| $datetest==$jour2 || $datetest==$jour3)
             {
            $datex=$date->format("Ymd");
            //ajouter une prestation
            $this->prestation->ajouterPrestation($description,$ville,$nbr_heure,$prix,$datex,$idclient,$idp);}}



             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
             $this->genererVue(array('jour2'=>$jour2,'jour'=>$jour,'email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    

    }

    public function facturationtotal(){

        
      if ($this->requete->existeParametre("id")){
        //id qui contient le mois de l'année 
        $id = $this->requete->getParametre("id");
        $client=$this->client->getClient();
        
        
        $facturationaout=$this->prestation->getFacturation($id);
        
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
      
    $this->genererVue(array('id'=>$id,'facturationaout'=>$facturationaout,'clients'=>$client,'email' => $emaila,'nom'=>$noma));

      }

            else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    public function trimestre(){

        $client=$this->client->getClient();
         
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];
        

         $chantier=$this->prestation->getchantiers();
        $chantiers=$this->prestation->getchantiers();

        $this->genererVue(array('chantier'=>$chantier,'chantiers'=>$chantiers,'clients'=>$client,'email' => $emaila,'nom'=>$noma));
    }
    public function pdf(){

        if ($this->requete->existeParametre("id") )
        {
         
        $id = $this->requete->getParametre("id");
        $prestation= $this->prestation->getPrestationUnique($id);
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();
         $clientId=$prestation['ID_client'];
        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];

        $client= $this->client->getClientParId($clientId);
        $this->genererVue(array('client'=>$client, 'prestation'=>$prestation,'id'=>$id,'email' => $emaila,'nom'=>$noma));

        }
        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             

        
    
    }
     public function pdfmois(){

        if ($this->requete->existeParametre("id") )
        {
         
        $id = $this->requete->getParametre("id");
        $prestation= $this->prestation->getPrestationUnique($id);
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();
         $clientId=$prestation['ID_client'];
        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];

        $client= $this->client->getClientParId($clientId);
        $this->genererVue(array('client'=>$client, 'prestation'=>$prestation,'id'=>$id,'email' => $emaila,'nom'=>$noma));

        }
        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             

        
    
    }

    public function pdfservices(){

        if ($this->requete->existeParametre("id") )
        {
         
        $id = $this->requete->getParametre("id");
        $service= $this->prestation->getServices($id);
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();
 
        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];

        $this->genererVue(array( 'service'=>$service,'id'=>$id,'email' => $emaila,'nom'=>$noma));

        }
        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             

        
    
    }
    public function exeAjout()
    {
        if ($this->requete->existeParametre("description") && 
            $this->requete->existeParametre("idclient") &&
            $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("chantier") 
            && $this->requete->existeParametre("prix") 
            && $this->requete->existeParametre("date1") 
            && $this->requete->existeParametre("date2"))  {

            $description = $this->requete->getParametre("description");
            $idclient = $this->requete->getParametre("idclient");
            $ville = $this->requete->getParametre("ville");
            $chantier = $this->requete->getParametre("chantier");
            $prix = $this->requete->getParametre("prix");
            $date1 = $this->requete->getParametre("date1");
            $date2 = $this->requete->getParametre("date2");
          
            //ajouter la dernière période
            $this->prestation->ajouterPeriode($date1,$date2);
            
            //retourner le dernier ID périod
            $idperiod=$this->prestation->dernierIdPeriod();
            $idp = $idperiod['MAX(ID_period)'];

            $begin = new DateTime($date1);
            
            $end = new DateTime($date2);
            $end = $end->modify( '+1 day' ); 
            //intervalle de chaque jours, boucle à chaque jours 
            $interval = new DateInterval('P1W');
            $daterange = new DatePeriod($begin, $interval ,$end);

            foreach($daterange as $date){
            $datex=$date->format("Ymd");
            //ajouter une prestation
           // $this->prestation->ajouterPrestation($description,$ville,$nbr_heure,$prix,$datex,$idclient,$idp);
            $this->prestation->ajouterPrestation(0,$description,$ville,$chantier,$prix,$datex,$idclient);
            }

             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
             $this->genererVue(array('date1'=>$date1,'email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             }
 
 public function exeAjoutTrimestre()
    {
        if ($this->requete->existeParametre("description") && $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("chantier") && $this->requete->existeParametre("prix") 
            && $this->requete->existeParametre("idclient") &&
            $this->requete->existeParametre("mois") && $this->requete->existeParametre("annee"))  {
            // innitier les variables

            $description = $this->requete->getParametre("description");
            $ville = $this->requete->getParametre("ville");
            $chantier = $this->requete->getParametre("chantier");
            $prix = $this->requete->getParametre("prix");
            $idclient = $this->requete->getParametre("idclient");
            $mois = $this->requete->getParametre("mois");
            $annee = $this->requete->getParametre("annee");
          

            // Création de la date
            $datetime = new DateTime(''.$annee.'-'.$mois.'-01');
            $datex= $datetime->format('Y-m-d');
            // ajouter la date du mois 
           
           
         

            
             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
           

            $this->prestation->ajouterPrestation(0,$description,$ville,$chantier,$prix,$datex,$idclient);
             $this->genererVue(array('email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             }

 /* ajout trimestrielle par période
 public function exeAjoutTrimestre()
    {
        if ($this->requete->existeParametre("description") && $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("nbr_heure") && $this->requete->existeParametre("prix") 
            && $this->requete->existeParametre("idclient") &&
            $this->requete->existeParametre("date1") && $this->requete->existeParametre("date2"))  {

            $description = $this->requete->getParametre("description");
            $ville = $this->requete->getParametre("ville");
            $nbr_heure = $this->requete->getParametre("nbr_heure");
            $prix = $this->requete->getParametre("prix");
         
            $idclient = $this->requete->getParametre("idclient");
            $date1 = $this->requete->getParametre("date1");
            $date2 = $this->requete->getParametre("date2");
          
            //ajouter la dernière période
            $this->prestation->ajouterPeriode($date1,$date2);
            
            //retourner le dernier ID périod
            $idperiod=$this->prestation->dernierIdPeriod();
            $idp = $idperiod['MAX(ID_period)'];

            $begin = new DateTime($date1);
            
            $end = new DateTime($date2);
            $end = $end->modify( '+1 day' ); 
            //intervalle de chaque jours, boucle trimestriel
            $interval = new DateInterval('P3M');
            $daterange = new DatePeriod($begin, $interval ,$end);

            foreach($daterange as $date){
            $datex=$date->format("Ymd");
            //ajouter une prestation
            $this->prestation->ajouterPrestation($description,$ville,$nbr_heure,$prix,$datex,$idclient,$idp);}

             $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
             $this->genererVue(array('date1'=>$date1,'email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             }*/


public function exesupprprestation(){

 if ($this->requete->existeParametre("idprestation")){

   $idprest = $this->requete->getParametre("idprestation");

   $this->prestation->supprPrestation($idprest);

   $email1= $this->admin->getAdminEmail();
             $nom1=$this->admin->getAdminNom();

             $emaila= $email1['Email'];
             $noma= $nom1['Prénom'];
            
             $this->genererVue(array('email' => $emaila,'nom'=>$noma));
 }

 else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             }



  public function exeAjoutClient()
    {
        if ($this->requete->existeParametre("nom") && 
            $this->requete->existeParametre("nomfact") &&
            $this->requete->existeParametre("adresse") &&
            $this->requete->existeParametre("codepostal") &&
            $this->requete->existeParametre("ville")  && 
            $this->requete->existeParametre("contact") &&
            $this->requete->existeParametre("email") && 
            $this->requete->existeParametre("telFixe") && 
            $this->requete->existeParametre("num_tva")  &&
            $this->requete->existeParametre("tva")  &&
            $this->requete->existeParametre("mobile") &&
            $this->requete->existeParametre("numeroclient")  )  

        {

          $nom = $this->requete->getParametre("nom");
          $nomfact = $this->requete->getParametre("nomfact");
          $adresse = $this->requete->getParametre("adresse");
          $codepostal = $this->requete->getParametre("codepostal");
          $ville = $this->requete->getParametre("ville");
          $contact = $this->requete->getParametre("contact");
          $email = $this->requete->getParametre("email");
          $telFixe = $this->requete->getParametre("telFixe");
          $num_tva = $this->requete->getParametre("num_tva");
          $tva = $this->requete->getParametre("tva");
          $mobile = $this->requete->getParametre("mobile");
          $numeroclient = $this->requete->getParametre("numeroclient");

          



            $this->client->ajouterClient($numeroclient,$nom,$nomfact,$adresse,$codepostal,$ville, $contact, $email, $telFixe, $num_tva, $mobile,$tva);
            //nom et prenom d'admin
            $email1= $this->admin->getAdminEmail();
            $nom1=$this->admin->getAdminNom();

            $emaila= $email1['Email'];
            $noma= $nom1['Prénom'];
            
            $this->genererVue(array('email' => $emaila,'nom'=>$noma));
            }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    


             }

    public function facturationParMois(){

        $client=$this->client->getClient();
       
        $numfact=$this->prestation->setfacture();
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];

        $this->genererVue(array('numfact'=>$numfact,'email' => $emaila,'nom'=>$noma,'client'=>$client));                  
         

    }
    public function exefacture(){
   if ($this->requete->existeParametre("numfact")){
        
         $numfact = $this->requete->getParametre("numfact");
        $this->prestation->updatefacture($numfact);

        $this->executerAction("facturationParMois");

     }
    else

   throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    

    }
    public function ajoutServices(){

        $client=$this->client->getClient();
        $chantier=$this->prestation->getchantier();
       
        
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];

        $this->genererVue(array('email' => $emaila,'nom'=>$noma,'client'=>$client,'chantier'=>$chantier)); 
         


    }

      public function exeajoutServices(){
     
         if ($this->requete->existeParametre("description") && 
            $this->requete->existeParametre("date") &&
            $this->requete->existeParametre("idclient") &&
            $this->requete->existeParametre("chantier")  && 
            $this->requete->existeParametre("prix"))  {
        
         $description = $this->requete->getParametre("description");
$date = $this->requete->getParametre("date");
$idclient = $this->requete->getParametre("idclient");
$chantier = $this->requete->getParametre("chantier");
$prix= $this->requete->getParametre("prix");

    
        $this->prestation->ajouterServices($idclient,$chantier,$date,$description,$prix);
         
        $client=$this->client->getClient();
       
        
        $email1= $this->admin->getAdminEmail();
        $nom1=$this->admin->getAdminNom();

        $emaila= $email1['Email'];
        $noma= $nom1['Prénom'];

        $this->genererVue(array('email' => $emaila,'nom'=>$noma,'client'=>$client)); }

        else

           throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    

    }


             
}
