<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux albums
 * 
 * @author Baptiste Pesquet
 */
class Prestation extends Modele
{

    /**
     * Renvoie la liste des albums associés à un genre
     * 
     * @param type $idGenre
     * @return type
     */
 
       public function getPrestation()
    {
        $sql = "SELECT `ID_prestation`, `Description`, `Ville`, `Nbr_heure`, `Prix`, `Date`, `ID_client`, `ID_period` FROM `prestation` WHERE 1";
        return $this->executerRequete($sql);
    }

    public function supprPrestation($id){

      $sql="DELETE FROM `prestation` WHERE ID_prestation = ?";
       return $this->executerRequete($sql, array($id));
    }


       public function getPrestationParMois($id)
    {
      // selection des prestations par mois 
        $sql = "select ID_prestation,Description, Ville, Nbr_heure, Prix, Date, YEAR(date) from prestation where month(Date)=? ";
        return $this->executerRequete($sql, array($id));
    }
      public function getPrestationUnique($id)
    {
        $sql = "SELECT `ID_prestation`, `Description`, `Ville`, `Nbr_heure`, `Prix`, `Date`, `ID_client`, `ID_period` FROM `prestation` WHERE ID_prestation= ?";

        $req = $this->executerRequete($sql, array($id));

        if ($req->rowCount() == 1) {
            return $req->fetch();  // Accès à la première ligne de résultat
        }
        else {
            throw new Exception("Aucun album ne correspond à l'identifiant '$id'");
        }
         
    }
    public function ajouterPrestation($description,$ville,$nbr_heure,$prix,$date,$id_client,$id_period)
    {
        $sql = "INSERT INTO `prestation`(`Description`, `Ville`, `Nbr_heure`, `Prix`, `Date`, `ID_client`, `ID_period`) VALUES (?,?,?,?,?,?,?)";
        $this->executerRequete($sql, array($description,$ville,$nbr_heure,$prix,$date,$id_client,$id_period));
    }
   
    
    public function ajouterPeriode($datedebut,$datefin)

    {
        $sql = "INSERT INTO `periode`(`Date_debut`, `Date_fin`) VALUES (?,?)";
        $this->executerRequete($sql, array($datedebut,$datefin));
    }

    public function dernierIdPeriod()
    {

        
      $sql="SELECT MAX(ID_period) FROM periode";
      $req =$this->executerRequete($sql);

       if ($req->rowCount() == 1) {
            return $req->fetch();  // Accès à la première ligne de résultat
        }
        else {
            throw new Exception("Aucun album ne correspond à l'identifiant '$id'");
        }
    }

     public function  getFacturation($idMois)
    {
  
      $sql = "SELECT * FROM `factvue` WHERE moisPrestation= ?";
      return $this->executerRequete($sql,array($idMois));
      
    }


  

    public function ajouterServices($num_cli,$chantier,$date_service,$description,$prixService)
    {

    $sql="INSERT INTO `service`( `num_cli`, `chantier`, `date_service`, `description`, `prixService`) VALUES (?,?,?,?,?)";
     $this->executerRequete($sql,array($num_cli,$chantier,$date_service,$description,$prixService));
    }

    public function getChantier()
    {

      $sql="SELECT DISTINCT Ville FROM prestation ";
      return $this->executerRequete($sql);


    }
    public function getService($idcli,$chantier){

      $sql="SELECT description, prixService, month(date_service) FROM `service` where num_cli=? and chantier =?";
      return $this->executerRequete($sql,array($idcli,$chantier));
      
    }


    public function getServiceMois($idmois)
    
    {

      $sql="SELECT *, month(date_service) as mois FROM service where month(date_service)= ?";
      return $this->executerRequete($sql,array($idmois));
    }
}

