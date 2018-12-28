
<?php $this->titre = "Accueil"; ?>

<br>
<br>
<br>
<br>


<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">

<div class="row">
    <ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span><a> Clients</a></li>
</ul>
 <h2 class="text-center">Liste des clients</h2>
    <div class="table-responsive">
        <table  id="example2" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Codepostal</th>
                    <th>Ville</th>
                    <th>Nom du ST</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Num_TVA</th>
                    <th>Mobile</th>
                    <th>#</th>
                    <!--th></th-->  <!-- Colonne des boutons d'action -->
                </tr>
            </thead>
             <?php $i=0 ?>
            <?php foreach ($client as $cli): ?>
                <?php $i++ ?>
                <tr>
                    <td> <?php echo $i ?></td>
                    <td><?= $this->nettoyer($cli['Nom']) ?></td>
                    <td><?= $this->nettoyer($cli['Adresse']) ?></td>
                    <td><?= $this->nettoyer($cli['Codepostal']) ?></td>
                    <td><?= $this->nettoyer($cli['Ville']) ?></td>
                    <td><?= $this->nettoyer($cli['Nom_st']) ?></td>
                    <td><?= $this->nettoyer($cli['Contact']) ?></td>
                    <td><?= $this->nettoyer($cli['Email']) ?></td>
                    <td><?= $this->nettoyer($cli['TelFixe']) ?></td>
                    <td><?= $this->nettoyer($cli['Num_tva']) ?></td>
                    <td><?= $this->nettoyer($cli['Mobile']) ?></td>

                  
                    <td><a href="" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span> </a>
                    <a  class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                    <a  class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> </a> </td>
                    
                </tr>
            <?php endforeach; ?>
         
        </table>
    </div>

    <!-- Partie principale de la page d'accueil -->
    
</div>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->

<script>

  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({

      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false

    });
  });
</script>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
    <script type="text/javascript" class="init">