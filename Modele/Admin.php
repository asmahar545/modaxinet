<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux albums
 * 
 * @author Baptiste Pesquet
 */
class Admin extends Modele
{

    /**
     * Renvoie la liste des albums associés à un genre
     * 
     * @param type $idGenre
     * @return type
     */
    public function getAdminMdp()
    {
        $sql = "SELECT MotdePasse FROM admin";
        $req= $this->executerRequete($sql);
        //return un élement du tableau
        if ($req->rowCount() == 1) {
            return $req->fetch();  // Accès à la première ligne de résultat
        }
        else {
            throw new Exception("Aucun album ne correspond à l'identifiant '$id'");
        }
       
    }

     public function getAdminEmail()
    {
        $sql = "SELECT Email FROM admin";
        $req= $this->executerRequete($sql);
        //return un élement du tableau
        if ($req->rowCount() == 1) {
            return $req->fetch();  // Accès à la première ligne de résultat
        }
        else {
            throw new Exception("Aucun album ne correspond à l'identifiant '$id'");
        }
       
    }

      public function getAdminNom()
    {
        $sql = "SELECT Prénom FROM admin";
        $req= $this->executerRequete($sql);
        //return un élement du tableau
        if ($req->rowCount() == 1) {
            return $req->fetch();  // Accès à la première ligne de résultat
        }
        else {
            throw new Exception("Aucun album ne correspond à l'identifiant '$id'");
        }
       
    }


    
   

}