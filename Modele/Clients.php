<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux clients
 */
class Clients extends Modele
{
    


    public function deleteClient($idCli)
    {

        $sql= "DELETE FROM `client` WHERE ID_client=?";
        $sql1 = $this->executerRequete($sql, array($idCli));
        
    }


    public function getClient()
    {
        $sql = "SELECT `ID_client`, `Nom`, `Adresse`, `Codepostal`, `Ville`, `Contact`, `Email`, `TelFixe`, `Num_tva`, `Mobile` FROM `client` WHERE 1";
        return $this->executerRequete($sql);
      
    }

    /**
     * Renvoie les infos sur un client
     * 
     * @param type $idClient
     * @return type
     * @throws Exception
     */
    public function getClientParId($idClient)
    {
        $sql = "SELECT `ID_client`,`numero_client`, `Nom`, `Adresse`, `Codepostal`, `Ville`, `Contact`, `Email`, `TelFixe`, `Num_tva`, `Mobile` FROM `client`where ID_client= ?";
        $client = $this->executerRequete($sql, array($idClient));
        if ($client->rowCount() == 1)
            return $client->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun client ne correspond à l'identifiqnt fourni");
    }

    /**
     * Ajoute un nouveau client
     * 
     * @param type $nom
     * @param type $prenom
     * @param type $adresse
     * @param type $codePostal
     * @param type $ville
     * @param type $courriel
     * @param type $mdp
     */
    public function ajouterClient($numerocli,$nom,$nomfact,$adresse, $codePostal, $ville, $contact, $email, $telFixe, $num_tva, $mobile,$TVA)
    {
     
        $sql="INSERT INTO `client`(`numero_client`, `Nom`, `nom_fact`, `Adresse`, `Codepostal`, `Ville`, `Contact`, `Email`, `TelFixe`, `Num_tva`, `Mobile`, `TVA`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->executerRequete($sql, array($numerocli,$nom,$nomfact,$adresse, $codePostal, $ville, $contact, $email, $telFixe, $num_tva, $mobile,$TVA));
    }

    /**
     * Modifie un client existant
     * 
     * @param type $idClient
     * @param type $nom
     * @param type $prenom
     * @param type $adresse
     * @param type $codePostal
     * @param type $ville
     * @param type $courriel
     * @param type $mdp
     */
    public function modifierClient($idClient, $nom, $prenom, $adresse, $codePostal, $ville, $courriel, $mdp)
    {
        $sql = "update T_CLIENT set CLI_NOM=?, CLI_PRENOM=?, CLI_ADRESSE=?, CLI_CP=?, 
            CLI_VILLE=?, CLI_COURRIEL=?, CLI_MDP=? where CLI_ID=?";
        $this->executerRequete($sql,
                array($nom, $prenom, $adresse, $codePostal, $ville, $courriel, $mdp, $idClient));
    }

}
