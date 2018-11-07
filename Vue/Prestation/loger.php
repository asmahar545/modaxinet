<br>
<br>
<br>
<br>

<!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
<?php $this->titre = "Platform"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>

<ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a href="">Platform - Modaxinet</a></li>
</ul>

<div class="row">
    

    <!-- Partie principale de la page d'accueil -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" id="imgAccueil" src="Contenu/cleaning.png" />
            </div>
       

            <div class="col-md-6">
                <br>
                <a href="prestation/clients" type="button" class="btn btn-block btn-primary">Mes clients</a>
                <a href="connexion/prestations" type="button" class="btn btn-block btn-warning">Mes prestations</a>
                <a href="prestation/facturationParMois" type="button" class="btn btn-block btn-success">Mes facturations</a>

               
            </div>
        </div>
    </div>
</div>
<br>