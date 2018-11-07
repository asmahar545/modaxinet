<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<?php $this->titre = "AjoutServices"; ?>
  <br>
            <br>
            <br>
            <br>

<?php if (isset($msgErreur)) : ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Erreur !</strong> <?= $this->nettoyer($msgErreur) ?>
    </div>
<?php endif; ?>
<h2 class="text-center">Ajouter un nouveau service à un chantier particulier </h2>
<div class="well">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#connexion" data-toggle="tab">Ajouter un service</a></li>
                
            </ul>
        </div>
    </div>

    <br>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="connexion">
            <form class="form-signin form-horizontal" role="form" action="prestation/exeajoutServices" method="post">
               <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <textarea name="description" type="text" class="form-control" placeholder="Entrez la description du service" rows=5 cols=30 required autofocus></textarea>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="date" type="date" class="form-control" placeholder="Entrez son nom" required autofocus>
                    </div>
                </div>
                       <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <select name="idclient" type="text" class="form-control" placeholder="" required>
                    <option value=""> Choix du client</option>
                                    <?php
                                    foreach ($client as $cli):
                                        echo '<option value="' . $this->nettoyer($cli['ID_client']) . '">' 
                                        .  $this->nettoyer($cli['Nom'])  . '</option>';
                                        ?>
                                    <?php endforeach; ?>

                </select> 
                </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <select name="chantier" type="text" class="form-control" placeholder="" required>
                    <option value=""> Choix du chantier</option>
                                    <?php
                                    foreach ($chantier as $cli):
                                        echo '<option value="' . $this->nettoyer($cli['Ville']) . '">' 
                                        .  $this->nettoyer($cli['Ville'])  . '</option>';
                                        ?>
                                    <?php endforeach; ?>

                </select> 
                </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="prix" type="text" class="form-control" placeholder="Entrez son prix " required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span>Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>