<br>
<br>



<?php $this->titre = "Ajout des prestations en nombre de jours"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<br>
<br>

<div class="row">
    
<h2 class="text-center">Ajouter des prestations pour trois fois semaines</h2>
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
            <form class="form-signin form-horizontal" role="form" action="prestation/exeAjoutjours" method="post">
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
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> Choix du jour 1
                    <select name="jour" type="text" class="form-control" placeholder="" required>
                        <option value=""> Choix du premier jour</option>
                        <option value="Mon">Lundi</option>
                        <option value="Tue">Mardi</option>
                        <option value="Wed">Mercredi</option>
                        <option value="Thu">Jeudi</option>
                        <option value="Fri">Vendredi</option>
                        <option value="Sat">Samedi</option>
                        <option value="Sun">Dimanche</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> Choix du jour 2
                    <select name="jour2" type="text" class="form-control" placeholder="" required>
                        <option value=""> Choix du premier jour</option>
                        <option value="Mon">Lundi</option>
                        <option value="Tue">Mardi</option>
                        <option value="Wed">Mercredi</option>
                        <option value="Thu">Jeudi</option>
                        <option value="Fri">Vendredi</option>
                        <option value="Sat">Samedi</option>
                        <option value="Sun">Dimanche</option>
                        </select>
                    </div>
                </div>

                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> Choix du jour 3
                    <select name="jour3" type="text" class="form-control" placeholder="" required>
                        <option value=""> Choix du premier jour</option>
                        <option value="Mon">Lundi</option>
                        <option value="Tue">Mardi</option>
                        <option value="Wed">Mercredi</option>
                        <option value="Thu">Jeudi</option>
                        <option value="Fri">Vendredi</option>
                        <option value="Sat">Samedi</option>
                        <option value="Sun">Dimanche</option>
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
