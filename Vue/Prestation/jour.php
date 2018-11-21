<br>
<br>



<?php $this->titre = "Ajout des prestations en nombre de jours"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<br>
<br>

<div class="row">
    
<h2 class="text-center">Ajouter un jour de prestation </h2>
<div class="well">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#connexion" data-toggle="tab">Données</a></li>
                
            </ul>
        </div>
    </div>

    
    
    <br>
    <br> 
          
    <div class="tab-content">
        <div class="tab-pane fade in active" id="connexion">
            <form class="form-signin form-horizontal" role="form" action="prestation/exejour" method="post">
                <div class="form-group">
                   
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                         <div>EXTRA/REGIE</div>
                        <select name="extra" type="text" class="form-control" placeholder="" required>
                        <option value=""> Choix </option>
                        <option value="0">NON</option>
                        <option value="1">OUI</option>
                        
                        </select>
                
                </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div>Description</div>
                        <textarea name="description" type="text" class="form-control" placeholder="Entrez la description de la prestation" rows=5 cols=30 required autofocus></textarea>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    
               <div>Client</div>
                <select name="idclient" type="text" class="form-control" placeholder="" required>
                <option value=""> Choix du client</option>
                                    <?php
                                    foreach ($clients as $cli):
                                        echo '<option value="' . $this->nettoyer($cli['ID_client']) . '">' 
                                        .  $this->nettoyer($cli['Nom'])  . '</option>';
                                        ?>
                                    <?php endforeach; ?>

                </select> 
                </div>
                </div>

                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div>Chantier</div>
                <select name="chantier" type="text" class="form-control" placeholder="" required>
                <option value=""> Choix du chantier</option>
                                    <?php
                                    foreach ($chantier as $cli):
                                        echo '<option value="' . $this->nettoyer($cli['Nom']) . '">' 
                                        .  $this->nettoyer($cli['Nom'])  . '</option>';
                                        ?>
                                    <?php endforeach; ?>

                </select> 
                </div>
                </div>
              
                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div>Adresse </div>
                <select name="ville" type="text" class="form-control" placeholder="" required>
                <option value="">Choix de l'adresse</option>
               
                                    <?php
                                    foreach ($chantiers as $cli):
                                        echo '<option value="' . $this->nettoyer($cli['Adresse']) . '">' 
                                        .  $this->nettoyer($cli['Adresse'])  . '</option>';
                                        ?>
                                    <?php endforeach; ?>

                </select> 
                </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div>Prix </div>
                        <input name="prix" type="text" class="form-control" placeholder="Entrez un prix ou 0 euro " required> 
                    </div>
                </div>

            
                 <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                         <div>Date </div>
                        <input name="date" type="date" class="form-control" placeholder="Entrez la date" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-succees"><span class="glyphicon glyphicon-log-in"></span> Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>

   
   
</div>
