<br>
<br>



<?php $this->titre = "Liste des des prestations"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<br>
<br>

<div class="row">
    
<h2 class="text-center">Ajouter des prestations par mois</h2>
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
                     <div> Description</div>
                     <textarea name="description" type="text" class="form-control" placeholder="Entrez la description de la prestation" rows=5 cols=30 required autofocus></textarea>
                </div>
            </div>
               
            <div class="form-group">
       <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    
        <div> Choix du client et du chantier</div>
       <select name="idchantier" type="text" class="form-control" placeholder="" required>
       <option value=""> Choix du client et du chantier </option>
        <?php
        foreach ($chantiers as $cli):
          echo '<option value="' . $this->nettoyer($cli['ID_chantier']) . '">' 
           .  $this->nettoyer($cli['client'])  .'/'. $this->nettoyer($cli['chantier'])  .'</br></option>';
              ?>
            <?php endforeach; ?>

                </select> 
                </div>
                </div>
                 
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Choix du prix
                    <input name="prix" type="text" class="form-control" placeholder="Entrez un prix" required>
                </div>
            </div>

   
              <!--
                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                 Choix du client
                <select name="idclient" type="text" class="form-control" placeholder="" required>
                    <option value=""> Choix du client</option>
                                    <?php
                                    // foreach ($clients as $cli):
                                     //   echo '<option value="' . $this->nettoyer($cli['ID_client']) . '">' 
                                     //   .  $this->nettoyer($cli['Nom'])  . '</option>';
                                        ?>
                                    <?php // endforeach; ?>

                </select> 
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div>Chantier</div>
                <select name="chantier" type="text" class="form-control" placeholder="" required>
                <option value=""> Choix du chantier</option>
                                    <?php
                                 //   foreach ($chantier as $cli):
                                  //      echo '<option value="' . $this->nettoyer($cli['Nom']) . '">' 
                                    //    .  $this->nettoyer($cli['Nom'])  . '</option>';
                                        ?>
                                    <?php // endforeach; ?>

                </select> 
                </div>
                </div>
              
                <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div>Adresse </div>
                <select name="ville" type="text" class="form-control" placeholder="" required>
                <option value="">Choix de l'adresse</option>
               
                                    <?php
                                   // foreach ($chantiers as $cli):
                                    //    echo '<option value="' . $this->nettoyer($cli['Adresse']) . '">' 
                                     //   .  $this->nettoyer($cli['Adresse'])  . '</option>';
                                        ?>
                                    <?php // endforeach; ?>

                </select> 
                </div>
                </div>
            -->
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> Choix du mois
                    <select name="mois" type="text" class="form-control" placeholder="" required>
                        <option value=""> Choix du mois</option>
                        <option value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Août</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select>
                    </div>
                </div>
                   <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> Choix de l'année
                    <select name="annee" type="number" class="form-control" placeholder="" required>
                        <option value=""> Choix de l'année</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                    </select>
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
