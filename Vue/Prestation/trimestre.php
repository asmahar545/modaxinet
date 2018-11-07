<br>
<br>



<?php $this->titre = "Liste des des prestations"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<br>
<br>

<div class="row">
    
<h2 class="text-center">Ajouter des prestations par trimestre</h2>
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
            <form class="form-signin form-horizontal" role="form" action="prestation/exeAjoutTrimestre" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <textarea name="description" type="text" class="form-control" placeholder="Entrez la description de la prestation" rows=5 cols=30 required autofocus></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="ville" type="text-center" class="form-control" placeholder="Entrez un chantier" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="nbr_heure" type="number" class="form-control" placeholder="Entrez un nombre d'heure" required>
                    </div>
                </div>

                
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="prix" type="number" class="form-control" placeholder="Entrez un prix" required>
                    </div>
                </div>

              
                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <select name="idclient" type="text" class="form-control" placeholder="" required>
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
                        <div>Période date de début</div>
                        <input name="date1" type="date" class="form-control" placeholder="Entrez une période de début" required>
                    </div>
                </div>

                 <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                         <div>Période date de fin</div>
                        <input name="date2" type="date" class="form-control" placeholder="Entrez une période de fin" required>
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
