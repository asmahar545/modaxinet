
<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<?php $this->titre = "AjoutClient"; ?>
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
<h2 class="text-center">Ajouter un nouveau client </h2>
<div class="well">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#connexion" data-toggle="tab">Ajouter</a></li>
                
            </ul>
        </div>
    </div>

    <br>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="connexion">
            <form class="form-signin form-horizontal" role="form" action="prestation/exeAjoutClient" method="post">
                 <div class="form-group">

                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div class="input-group">
                        <span class="input-group-addon">MO/</span>
                        <input name="numeroclient" type="text" class="form-control" placeholder="Entrez le numéro client" required autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="nom" type="text" class="form-control" placeholder="Entrez son nom" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="adresse" type="text" class="form-control" placeholder="Entrez son adresse" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="codepostal" type="text" class="form-control" placeholder="Entrez son codepostal" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="ville" type="text" class="form-control" placeholder="Entrez sa ville" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="contact" type="text" class="form-control" placeholder="Entrez son contact" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="email" type="email" class="form-control" placeholder="Entrez son email" required>
                    </div>
                </div>
                    <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="telFixe" type="number" class="form-control" placeholder="Entrez son télèphone" required>
                    </div>
                </div>
                    <div class="form-group">

                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div class="input-group">
                        <span class="input-group-addon">BE</span>
                        <input name="num_tva" type="text" class="form-control" placeholder="Entrez son numero" required>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input name="mobile" type="number" class="form-control" placeholder="Entrez son mobile"required>
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