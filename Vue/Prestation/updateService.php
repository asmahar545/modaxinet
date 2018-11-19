<br>
<br>



<?php $this->titre = "Ajout des prestations en nombre de jours"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<br>
<br>

<div class="row">
    
<h2 class="text-center">Modification de la prestation</h2>
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
            <form class="form-signin form-horizontal" role="form" action="prestation/exeUpdatePrestation" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="description"  type="text" rows=5 class="form-control" placeholder="Entrez la description de la prestation"  required value= "<?= $prestation['Description'] ?>"></input>
                    </div>
                </div>
            
           

           
                
                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <select name="idclient" type="text" class="form-control" placeholder="" required>
                    <option value="<?= $prestation['ID_client'] ?>">  <?php echo  $prestation['Nom'] ?> </option>
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
                <select name="idclient" type="text" class="form-control" placeholder="" required>
                    <option value="<?= $prestation['Ville'] ?>">  <?php echo  $prestation['Ville'] ?> </option>
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
                        <input name="prix" type="text" class="form-control" placeholder="Entrez un prix" value="<?= $prestation['Prix'] ?>"required>
                    </div>
                </div>

                 <div class="form-group">

                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div>Date de la prestation</div>
                        <input name="date" type="date" class="form-control" placeholder="Entrez une période de début" value="<?= $prestation['Date'] ?>"required>
                    </div>
                </div>

                 
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-succees"><span class="glyphicon glyphicon-log-in"> </span> modifier</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>

   
   
</div>